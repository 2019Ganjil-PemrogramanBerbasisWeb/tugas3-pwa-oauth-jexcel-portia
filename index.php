<html>
<script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.css" type="text/css" />

<script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jsuites/v2/jsuites.css" type="text/css" />

<div id="spreadsheet"></div>

<script>
var data = [
    ['Sulthon Nashir', 'Mahasiswa', '2019-02-12', '08222121232'],
    ['Nesya', 'Dosen', '2018-07-11', '082829393929'],
];

jexcel(document.getElementById('spreadsheet'), {
    data:data,
    columns: [
        {
            type: 'text',
            title:'Nama',
            width:90
        },
        {
            type: 'dropdown',
            title:'Make',
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
            title:'Masuk',
            width:120
        },
        {
            type: 'numeric',
            title:'No. HP',
            width:150,
        },
     ]
});
</script>
</html>
