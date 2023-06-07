<?php
$link = mysqli_connect(
	'localhost',
	'D1090505',
	'#aiKeicu4',
	'D1090505'
);

$sql = "SELECT * FROM selfInfo";
$result = mysqli_query($link, $sql);
$sql2 = "SELECT * FROM specialty";
$result_specialty = mysqli_query($link, $sql2);
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="stylesheet" href="stylesheets/control.css">
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.13.6/dist/full.css" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
	<title>個人網頁</title>
</head>

<body>
	<?php include("header_login.php"); ?>
	<div class="w-80 h-80" style="position: relative; left: 150px; top: 100px;">
		<img src="https://www.iecs.fcu.edu.tw/media/img/teacher/avatar/899631.jpg" />
	</div>

	<div class="container mx-auto">
		<table class="min-w-full">
			<thead class="bg-gray-300">
				<tr>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">email</th>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">office</th>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">telephone</th>

				</tr>
			</thead>
			<tbody class="bg-gray-600">
				<?php while ($row = mysqli_fetch_array($result)): ?>
					<tr>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["id"]; ?>
						</td>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["email"]; ?>
						</td>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["name"]; ?>
						</td>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["office"]; ?>
						</td>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["telephone"]; ?>
						</td>

					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>

	</div>
	<div class="w-5/6 mx-auto ">
		<table class="min-w-full">
			<thead class="bg-gray-300">
				<tr>
					<th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Specialty</th>

				</tr>
			</thead>
			<tbody class="bg-gray-600">
				<?php while ($row = mysqli_fetch_array($result_specialty)): ?>
					<tr>
						<td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
							<?php echo $row["name"]; ?>
						</td>

					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>

	</div>
	<br>
</body>
<script>
	var clickCount = 0;
	var count = document.getElementById('count');

	count.addEventListener('click', function () {
		clickCount++;
		if (clickCount > 5) {
			window.location.href = 'https://www.youtube.com/watch?v=5zYl5MiiauI&t=157s';
		}
	});
</script>

</html>