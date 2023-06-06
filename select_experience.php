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
    <header class="header-area">
        <!-- Navbar -->
        <div class="navbar fixed top-0 left-0 right-0 z-50 bg-base-100 shadow-lg border-none">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-5 p-2 shadow-lg bg-base-100 rounded-box w-52">
                        <li><a href="./index.php">主頁</a></li>
                        <li tabindex="0">
                            <span>課程</span>
                            <ul class="rounded-box bg-base-100 p-2 bg">
                                <li><a href="select_course.php">課程大綱</a></li>
                                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">課程影音</a></li>
                                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">課程教材</a></li>
                            </ul>
                        </li>
                        <li><a href="select_prize.php">獲獎紀錄</a></li>
                        <li><a href="select_book.php">個人著作</a></li>
                        <li><a href="select_experience.php">個人經歷</a></li>
                        <li><a href="select_periodical.php">期刊論文</a></li>
                        <li><a href="select_session.php">會議論文</a></li>
                        <li><a href="select_plan.php">計畫</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost normal-case text-xl">李榮三主任個人網頁</a>
            </div>
            <div class="navbar-end">
                <label for="my-modal-3" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </label>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img
                                src="https://image.damanwoo.com/files/styles/rs-big/public/flickr/4/3151/5820170825_59418deec8_o.jpg" />
                        </div>
                    </label>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End-Navbar -->

    <!-- Search Modal -->
    <input type="checkbox" id="my-modal-3" class="modal-toggle">
    <div class="modal">
        <div class="modal-box relative">
            <label for="my-modal-3"
                class="btn btn-sm btn-circle border-none bg-base-100 text-black font-bold absolute right-2 top-2">✕</label>
            <div class="form-control pr-6">
                <input type="text" placeholder="Search" class="input input-bordered bg-base-100 ">
            </div>
        </div>
    </div>

    <div class="w-5/6 mx-auto mt-24">
        <table class="min-w-full">
            <thead class="bg-gray-300">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">position</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">unit</th>

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

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>