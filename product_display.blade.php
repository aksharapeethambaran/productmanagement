<!DOCTPE html>
<html>
<head>
<title>View Products</title>
</head>
<body>
    <h1>View Products</h1>
     <a href = '{{URL::to('insert')}}'><h3>Add Products</h3></a> 
<table border = "1">
<tr>

<td>ProductId</td>
<td>Product Name</td>
<td>Model</td>
<td>Product Status</td>
<td>Product Image</td>
</tr>
<?php foreach ($products as $product){?>
<tr>
<td>{{ $product->productid }}</td>
<td>{{ $product->name }}</td>

<td>{{ $product->model }}</td>
<td>{{ $product->status }}</td>
    
     <td> <img src= "{{  asset('storage/images/'.$product->file)}}" style="width:504px;height:228px" /> </td>
    <td><a href = 'product/edit/{{ $product->id }}'>Edit</a></td>
     <td><a href = '/product/delete/{{ $product->id }}'>Delete</a></td>
</tr>
<?php } ?>
   
    
</table>
   
</body>
</html>