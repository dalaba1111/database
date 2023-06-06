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

<body class="flex justify-center items-center h-screen">
    <div class="max-w-sm mx-auto">
        <h1 class="text-4xl font-bold text-center mb-4">Book</h1>
        <form action="insert_sql_book.php" method="post" class="max-w-sm mx-auto">
            <div class="mb-4">
                <label for="id" class="block">ID:</label>
                <input type="text" name="id" id="id" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="name" class="block">Name:</label>
                <input type="text" name="name" id="name" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="category" class="block">Category:</label>
                <input type="text" name="category" id="category" required
                    class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="co_author" class="block">Co_author:</label>
                <input type="text" name="co_author" id="co_author" required
                    class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="publishing_house" class="block">Publishing_house:</label>
                <input type="text" name="publishing_house" id="publishing_house" required
                    class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="flex justify-between">
                <input type="submit" value="Submit" class="btn btn-accent">
                <button onclick="goBack()" class="btn btn-outline btn-error">返回上一頁</button>
            </div>
        </form>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }

    </script>
</body>

</html>