<?php
$action = isset($_GET['action'])?$_GET['action']:'index';
$laptop = new Laptop();
if ($action=='index')
{
    $data =$laptop->all();
//print_r($data);
    include './views/laptop/index.php';
}

if ($action=='tatca')
{
    $data =$laptop->all();
//print_r($data);
    include './views/laptop/index.php';
}
if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data = $laptop->search($kw);
    include './views/laptop/index.php';
}
if ($action=='search2')
{
    $cats = isset($_GET['cats'])?$_GET['cats']:'';
    $data = $laptop->search2($cats);
    include './views/laptop/index.php';
}
if ($action=='search3')
{
    $pubs = isset($_GET['pubs'])?$_GET['pubs']:'';
    $data = $laptop->search3($pubs);
    include './views/laptop/index.php';
}

if ($action=='detail')
{
    $id = isset($_GET['id'])?$_GET['id']:'';
    $data =$laptop->detail($id);

    include './views/laptop/detail.php';
}
if ($action=='filterL')
{

    $key = isset($_GET['key'])?$_GET['key']:'';
    $ma ="";
    if($key=="vp") {
        $ma="Thường";
    }
    if($key=="gm") {
        $ma = "Gaming";
    }
    $data =$laptop->dsL($ma);

    include './views/laptop/index.php';
}
if ($action=='filterTH')
{
    $key = isset($_GET['key'])?$_GET['key']:'';
    $data =$laptop->dsTH($key);
    include './views/laptop/index.php';
}
