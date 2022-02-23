<!DOCTYPE html>
<html>
<head>
    <style>
div {
  background-color:#D4A4DB;
  width: 300px;
  border: 15px solid gray;
  padding: 50px;
  margin: 20px;
}
.box {
    width: 80%;
    height: 100%;
    margin: 0px auto 0px auto; //atas kanan bawah kiri
}
.kepala {
    text-align: center;
    width: 100%;
    padding-top:50px;
    padding-bottom: 50px;
        background-image: url('gorden.jpg');
}
</style>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<nav style="background-color:#D4A4DB ;" class="navbar navbar-expand-lg">
<div class="container">

<div class="row mt-3">
  <div class="col-sm-4 ml-2">
    <div class="card border-dark mb-3 target-left" style="max-width: 50rem;">
    <form method="post" action="">
<div class="container">
    <div class="row">
        <tr id="tree-struktur" style="display:none">
            <td div class="box">
                Ketua Kelas
                <td>
                    <td div class="box">
                       Sekertaris
                    </td>
                    <td div class="box">
                       Bendahara
                    </td>
                    <td div class="box">
                       Seksi Kerohanian
                    </td>
                    <td div class="box">
                       Seksi Keamanan
                    </td>
                    <td div class="box">
                       Seksi Olahraga
                    </td>
                    <td div class="box">
                       Seksi Kebersihan
                    </td>
                </td>
            </td>
        </tr>
    <table class="table" id="tablestruktur"></table>
</div>
  </div>
    <script>

        $(document).ready(function () {
        // create a tree
        $("#tablestruktur").jOrgChart({
            chartElement: $("#tablestruktur"), 
            nodeClicked: nodeClicked
        });
        // lighting a node in the selection
        function nodeClicked(node, type) {
            node = node || $(this);
            $('.jOrgChart .selected').removeClass('selected');
                node.addClass('selected');
            }
        });
    </script>
    </body>
</html>