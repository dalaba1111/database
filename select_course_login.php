<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505'
);

$sql = "SELECT * FROM class";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
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
    <div class="w-5/6 mx-auto mt-24">
        <table class="min-w-full">
            <thead class="bg-gray-300">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">number</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Credit</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">classroom</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">time</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">option_require</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">teacher</th>
                </tr>
            </thead>
            <tbody class="bg-gray-600">
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["number"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["id"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["name"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["credit"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["class"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["classroom"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["time"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["option_require"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["teacher"]; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>