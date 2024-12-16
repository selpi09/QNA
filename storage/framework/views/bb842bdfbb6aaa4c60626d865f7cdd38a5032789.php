<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
</head>
<body>
 
	<h3>Data QNA</h3>
 
	<a href="/tatausaha/tambah"> + Tambah QNA Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
        <th></th>
			<th>Pertanyaan</th>
			<th>Jawaban</th>
			<th>Opsi</th>
		</tr>
		<?php $__currentLoopData = $tatausahas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
        <td><?php echo e($t->id); ?></td>
			<td><?php echo e($t->pertanyaan); ?></td>
			<td><?php echo e($t->jawaban); ?></td>
			<td>
				<a href="/tatausaha/edit/<?php echo e($t->id); ?>">Edit</a>
				|
				<a href="/tatausaha/hapus/<?php echo e($t->id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html><?php /**PATH C:\laraveldelapan\resources\views/dashboard/index.blade.php ENDPATH**/ ?>