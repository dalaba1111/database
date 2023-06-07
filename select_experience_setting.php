<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505'
);

$sql = "SELECT * FROM experience";
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
    <?php include("header_setting.php"); ?>
    <div class="mt-24 w-full flex justify-center">
        <button onclick="addItem()" class="btn btn-outline btn-success">新增</button>
    </div>
    <div class="w-5/6 mx-auto mt-5">
        <table class="min-w-full">
            <thead class="bg-gray-300">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">position</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">unit</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                </tr>
            </thead>
            <tbody class="bg-gray-600">
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["position"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <?php echo $row["unit"]; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-300">
                            <button onclick="deleteItem('<?php echo $row["position"]; ?>')"
                                class="btn btn-square btn-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    function deleteItem(position) {
        window.location.href = "delete_sql_experience.php?position=" + position;
    };
    function addItem() {
        window.location.href = "insert_experience.php";
    }
</script>

</html>