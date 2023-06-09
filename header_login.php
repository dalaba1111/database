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
						<li><a href="homepage_login.php">主頁</a></li>
						<li tabindex="0">
							<span>課程</span>
							<ul class="rounded-box bg-base-100 p-2 bg">
								<li><a href="select_course_login.php">課程大綱</a></li>
								<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">課程影音</a></li>
								<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">課程教材</a></li>
							</ul>
						</li>
						<li><a href="select_prize_login.php">獲獎紀錄</a></li>
						<li><a href="select_book_login.php">個人著作</a></li>
						<li><a href="select_experience_login.php">個人經歷</a></li>
						<li><a href="select_periodical_login.php">期刊論文</a></li>
						<li><a href="select_session_login.php">會議論文</a></li>
						<li><a href="select_plan_login.php">計畫</a></li>
					</ul>
				</div>
			</div>
			<div class="navbar-center">
				<a id="count" class="btn btn-ghost normal-case text-xl">李榮三主任個人網頁</a>
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
							<img src="https://www.iecs.fcu.edu.tw/media/img/teacher/avatar/899631.jpg" />
						</div>
					</label>
					<ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
						<li><a href="homepage_setting.php">設定</a></li>
						<li><a href="index.php">登出</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- 結束-導航欄 -->

	<!-- 搜尋模態框 -->
	<input type="checkbox" id="my-modal-3" class="modal-toggle">
	<div class="modal">
		<div class="modal-box relative">
			<label for="my-modal-3"
				class="btn btn-sm btn-circle border-none bg-base-100 text-black font-bold absolute right-2 top-2">✕</label>
			<div class="form-control pr-6">
				<input type="text" placeholder="搜尋" class="input input-bordered bg-base-100 ">
			</div>
		</div>
	</div>