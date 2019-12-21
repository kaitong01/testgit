<?php

use App\Library\Fn;
use Illuminate\Support\Facades\Auth;

class TourSerieDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public $path = '/tours/series';
    public $primaryKey = 'id';

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
        // $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');

    	$key[] = array('id'=>'status', 'label'=>'เปิดช้งาน', 'cls'=>'td-status', 'type'=>'toggleSwitch');
    	$key[] = array('id'=>'name', 'label'=>'ชื่อ', 'cls'=>'td-name', 'type'=>'groupName');

    	$key[] = array('id'=>'updated_at', 'label'=>'แก้ไขข้อมูลล่าสุด', 'cls'=>'td-date td-light', 'type'=>'livedate');
    	$key[] = array('id'=>'action', 'cls'=>'td-action', 'type'=>'action');

    	return $key;
    }


    public function init(array $data,array &$ops=[])
    {

    	$tr = '';
    	$keys = $this->keys();

    	$seq = ($ops['page'] * $ops['limit']) - $ops['limit'];

    	// title
    	if( $ops['page']==1 ){
	    	$ths = '';
	    	foreach ($keys as $key => $value) {

	    		$label = isset($value['label']) ?$value['label']: '';

	    		$ico = isset($value['icon']) ? '<i class="mr-1 icon-'.$value['icon'].'"></i>':'';
	    		$cls = isset($value['cls']) ? ' class="'.$value['cls'].'"':'';
				$ths .= '<th'.$cls.'>'.$ico.'<span>'.$label.'</span></th>';
				//  data-col="'.$key.'"
			}
			$tr .= '<tr role="table__fixed">'.$ths.'</tr>';
		}

        $ops['last_item_title'] = isset($ops['last_item_title'])? $ops['last_item_title']: null;

		foreach ($data as $key => $item) {
			$seq ++;
			// $item = json_decode( json_encode($item), 1);

            // if($ops['last_item_title']!=$item->region_id){
            //     $ops['last_item_title'] = $item->region_id;

            //     $tr .= $this->geTitle($item);
            // }

            $tr .= $this->getItem($seq, $item, $ops);
		}

    	return $tr;
    }

    public function geTitle($data)
    {
        return '<tr><td class="td-head" colspan="'.count($this->keys()).'">'.$data->region_name.'</td></tr>';
    }

    public function getItem($seq, $data, $ops=[])
    {
        $tds = '';
        foreach ($this->keys() as $label) {

            $type = isset($label['type'])? $label['type']: 'text';
            $val = '';


            if( $type=='index' ) {
                $val = $seq;
            }else if( method_exists($this, $type) ){
                $val = $this->{$type}( $data, isset($label['id'])? $label['id']: '', $ops );
            }
            else if( !empty( $label['id'] ) ){
                $val = !empty($data->{$label['id']})? $data->{$label['id']}: '';
            }

            $cls = isset($label['cls']) ? ' class="'.$label['cls'].'"':'';
            $tds .= '<td'.$cls.'>'.$val.'</td>';
        }

        return '<tr>'.$tds.'</tr>';
    }


    public function livedate($data, $key)
    {
        $val = '';
        if( !empty($data->{$key}) ){
            $val = $this->fn->q('time')->live($data->{$key});
        }

        return '<span ref="'.$key.'">'.$val.'</span>';
    }

    public function groupName($data, $key, $ops=[])
    {

        $name = !empty($data->name)? $data->name: '';
        $description = !empty($data->description)? $data->description: '';

        $picture = !empty($data->image)
            ? '<img class="img-h" src="'. asset("storage/{$data->image}"). '" alt="" />'
            : '';

        if( !empty( $ops['q'] ) ){
            $q = trim($ops['q']);

            // $name = preg_replace("/\b($q)\b/i", '<span class="mark">'.$q.'</span>', trim($name));
            $name = str_replace($q, '<span class="mark">'.$q.'</span>', trim($name));
        }


    	return '<div class="media">'.
			'<div class="pic-wrap mr-2" style="width: 150px;"><a href="'.asset($this->path.'/'.$data->{$this->primaryKey}).'/edit" class="pic" ref="image_url" data-type="image">'.$picture.'</a></div>'.
            '<div class="media-body">'.

                '<a href="'.asset($this->path.'/'.$data->{$this->primaryKey}).'/edit">'.
                    '<div class="fwb" ref="name">'.$name.'</div>'.
                '</a>'.


                '<div>'.
                ( !empty($data->wholesale->name)

                    ? 'รายการจากโฮลเซลล์ : <a href="#">'. $data->wholesale->name.'</a>'

                    : 'รายการสร้างเอง'

                ).
                '</div>'.

                // '<div class="y-ellipsis clamp-2 fs-13 text-muted"><span ref="description">'. $description .'</span></div>'.
			'</div>'.
		'</div>';
    }

    public function status($data)
    {
    	$val = '';

    	if( is_array($data->status) ){
    		$val = '<div class="ui-status" style="background-color:'.$data->status->color.';color:#fff" data-ref="status_arr" data-type="status">'.$data->status->name.'</div>';

    	}
    	else{

	    	switch ($data->status) {
                case 2:
	    			$val = '<div class="ui-status" data-ref="status" data-type="status">แบบร่าง</div>';
                    break;

	    		case 1:
	    			$val = '<div class="ui-status primary" data-ref="status" data-type="status">ใช้งาน</div>';
	    			break;

	    		case 0:
	    			$val = '<div class="ui-status danger" data-ref="status" data-type="status">ระงับ</div>';
	    			break;
	    	}
    	}

    	return $val;
    }


    public function toggleSwitch($data, $name='status')
    {
        $val = isset($data->{$name})? $data->{$name}: '';
        $id = isset($data->{$this->primaryKey})? $data->{$this->primaryKey}:null;






        $checked = $val==1 ? ' checked': '';
        return '<label class="switch">'.
            '<input type="checkbox"'.$checked.' name="'.$name.'" value="'.$val.'" data-plugin="switch" data-options="'.htmlentities(json_encode([
                'url' => asset( "{$this->path}/switch" ),
                'data' => [
                    'id' => $id,
                    'company_id' => Auth::user()->company->id,
                ]
            ])).'">'.
            '<span class="slider round"></span>'.
        '</label>';
    }

    public function action($data)
    {
        $btn = '';
        $id = isset($data->{$this->primaryKey})? $data->{$this->primaryKey}:null;

        $btn .= '<a href="'.asset( "{$this->path}/{$id}/edit" ).'" class="btn btn-sm btn-primary ml-1" title="แก้ไข"><i class="fa fa-pencil"></i></a>';
		return $btn;
    }
}
