<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.css" type="text/css" />
<script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jsuites/v2/jsuites.css" type="text/css" />
<link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.datatables.css" type="text/css" />

<div id="spreadsheet"></div>
<p>
<input type="button" value="Add new row" onclick="$('#spreadsheet').jexcel('insertRow')" />
<input type="button" value="Add new columns" onclick="$('#spreadsheet').jexcel('insertColumn')" />
</p>
<script>
var data = [
    [],
    [],
    [],
    [],
    [],
    [],
];

jexcel(document.getElementById('spreadsheet'), {
    data:data,
    csvHeaders:true,
    search:true,
    pagination:10,
    columns: [
        {
            type: 'text',
            title:'Nama',
            width:90
        },
        {
            type: 'dropdown',
            title:'Status',
            width:120,
            source:[
                "Mahasiswa",
                "Tamu",
                "Dosen",
                "Lain-Lain",
              ]
        },
        {
            type: 'calendar',
            title:'Tanggal Masuk',
            width:120
        },
        {
            type: 'numeric',
            title:'No. HP',
            width:150,
        },
     ]
});
$('#spreadsheet').jexcel(options);

</script>
</html>
