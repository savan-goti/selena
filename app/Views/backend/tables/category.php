<?php
$sTable = TBL_CATEGORY;
$aColumns = [
    $sTable . '.id',
    $sTable . '.image',
    $sTable . '.title',
    $sTable . '.controller',
    $sTable . '.bg_color',
    $sTable . '.text_color',
    $sTable . '.is_active',
];
$sIndexColumn = 'id';
$join = [
];

$where = [];
array_push($where, $sTable . '.is_delete = 0');

$filter = [];
$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where);

$output = $result['output'];
$rResult = $result['rResult'];

// $security = \Config\Services::security();
// $output['token'] = $security->get_csrf_hash();

//$output['aaData'] = $result['rResult'];
foreach ($rResult as $key => $aRow) {
    $aRow = (array)$aRow;
    // pr($aRow);die;
    $id = $aRow['id'];
    $row = [];
    $row[] = $id;
    if(!empty($aRow['image'])){
        $row[] = '<a href="'.base_url(CATEGORY.$aRow['image']).'" target="_blank"><img class="tableImg" src="'.base_url(CATEGORY.$aRow['image']).'"></a>'; 
    }else{
        $row[]='';
    }
    $row[] = $aRow['title'];
    $row[] = $aRow['controller'];
    $row[] = '<input type="color" class="" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="'.$aRow['bg_color'].'" disabled>';
    $row[] = '<label class="switch switch-primary">
    <input type="checkbox" class="switch-input category_switch" value="'.$id.'" '.($aRow['is_active']==1 ? 'checked' : '').'  >
        <span class="switch-toggle-slider">
            <span class="switch-on"> <i class="bx bx-check"></i></span>
            <span class="switch-off"> <i class="bx bx-x"></i></span>
        </span>
    </label>';

    $option = '<div class="d-inline-block text-nowrap">';
    $option .= '<a href="'.base_url('backend/category/edit/'.$id).'" data-toggle="tooltip" title="" class="btn btn-sm btn-primary" data-original-title="Edit">
        <i class="bx bx-edit"></i>
    </a>&nbsp';
    $option .='<a href="javascript:void(0);" data-id="'.$id.'" data-toggle="tooltip" title="" class="btn btn-sm btn-danger  deletecategory" data-original-title="Remove"><i class="bx bx-trash"></i></a>&nbsp';
    $option .= '</div>';

    $row[] = $option;
    $output['aaData'][] = $row;
}