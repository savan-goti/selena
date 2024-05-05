<?php
$sTable = TBL_BANNER;
$aColumns = [
    $sTable . '.id',
    $sTable . '.title',
    $sTable . '.url',
    'type','T.name as banner_type',
    $sTable . '.type',
    $sTable . '.image',
    $sTable . '.is_active',
];
$sIndexColumn = 'id';
$join = [
    "LEFT JOIN tbltype T ON T.id = ".$sTable.".type AND T.`is_delete` = 0",
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
        $row[] = '<a href="'.base_url(BANNER.$aRow['image']).'" target="_blank"><img class="tableImg" src="'.base_url(BANNER.$aRow['image']).'"></a>'; 
    }else{
        $row[]='';
    }
    $row[] = $aRow['title'];
    // $row[] = $aRow['url'];
    $row[] = '<a href="'.$aRow['url'].'" target="_blank" class="btn btn-sm btn-secondary" style="color:#fff;"> LINK </a>';
    $row[] = $aRow['banner_type'];
    $row[] = '<label class="switch switch-primary">
    <input type="checkbox" class="switch-input banner_switch" value="'.$id.'" '.($aRow['is_active']==1 ? 'checked' : '').'  >
        <span class="switch-toggle-slider">
            <span class="switch-on"> <i class="bx bx-check"></i></span>
            <span class="switch-off"> <i class="bx bx-x"></i></span>
        </span>
    </label>';

    $option = '<div class="d-inline-block text-nowrap">';
    $option .= '<a href="'.base_url('backend/banner/edit/'.$id).'" data-toggle="tooltip" title="" class="btn btn-sm btn-primary" data-original-title="Edit">
        <i class="bx bx-edit"></i>
    </a>&nbsp';
    $option .='<a href="javascript:void(0);" data-id="'.$id.'" data-toggle="tooltip" title="" class="btn btn-sm btn-danger  deletebanner" data-original-title="Remove"><i class="bx bx-trash"></i></a>&nbsp';
    $option .= '</div>';

    $row[] = $option;
    $output['aaData'][] = $row;
}