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
        <h1 class="text-4xl font-bold text-center mb-4">Course</h1>
        <form action="insert_sql_course.php" method="post" class="max-w-sm mx-auto">
            <div class="mb-4">
                <label for="id" class="block">Number:</label>
                <input type="text" name="number" id="number" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="id" class="block">ID:</label>
                <input type="text" name="id" id="id" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="name" class="block">Name:</label>
                <input type="text" name="name" id="name" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="category" class="block">Credit:</label>
                <input type="text" name="credit" id="credit" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="co_author" class="block">Class:</label>
                <input type="text" name="class" id="class" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="publishing_house" class="block">Classroom:</label>
                <input type="text" name="classroom" id="classroom" required
                    class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="name" class="block">Time:</label>
                <input type="text" name="time" id="time" required class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="name" class="block">Option_require:</label>
                <input type="text" name="option_require" id="option_require" required
                    class="border border-gray-300 px-2 py-1 rounded">
            </div>
            <div class="mb-4">
                <label for="name" class="block">Teacher:</label>
                <input type="text" name="teacher" id="teacher" required
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