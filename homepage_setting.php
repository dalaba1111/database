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
	<?php include("header_setting.php"); ?>
	<div class="w-80 h-80" style="position: relative; left: 150px; top: 100px;">
		<img src="https://www.iecs.fcu.edu.tw/media/img/teacher/avatar/899631.jpg" />
	</div>
	<div class="form-control w-full max-w-xs mx-auto">
		<label class="label">
			<span class="label-text">大頭貼更換</span>
		</label>
		<input type="file" class="file-input file-input-bordered w-full max-w-xs" />
	</div>

	<div class="mt-24 w-full flex justify-center">
		<button onclick="addItem_selfInfo()" class="btn btn-outline btn-success">編輯</button>
	</div>
	<div class="w-5/6 mx-auto ">
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
	<div class="mt-24 w-full flex justify-center">
		<button onclick="addItem_specialty()" class="btn btn-outline btn-success">編輯</button>
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
	function addItem_selfInfo() {
		window.location.href = "select_selfInfo_setting.php";
	};
	function addItem_specialty() {
		window.location.href = "select_specialty_setting.php";
	};
</script>

</html>