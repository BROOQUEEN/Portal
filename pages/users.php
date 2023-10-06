	<section class="users-list">
		<h2 class="users-list__title">Список пользователей в системе</h2>
	
		<table >
			<tr>
				<th class="users-list__tab-avatar">Фото</th>
				<th>ФИО</th>
				<th>Логин</th>
				<th>Почта</th>
			</tr>
			
				<?php 
			//Вывод пользователей
			$query = mysqli_query($connect, "SELECT * FROM `users`");
			
			while ($users_list = mysqli_fetch_assoc($query)) {
				?>
				<tr>
				<td class="users-list__tab-avatar"><div class="users-list__tab-img"><img src="<?= $users_list['avatar']; ?>"</div></td>
				<td><?php echo $users_list['full_name'];?></td>
				<td><?php echo $users_list['login'];?></td>
				<td><?php echo $users_list['email'];?></td>
			</tr>
				<?php
			}?>
			
		
		</table>


		
	
	</section>
	<style>
		.users-list {
			margin-top: 50px;
			display: flex;
			flex-direction: column;
			width: 100%;
			background-color: rgb(51, 39, 39);
		}
		.users-list__title {
			text-align: center;
		}

		.users-list__tab-avatar {
			width: 50px;
			
		}
		.users-list__tab-img {
			border: 2px solid #3498db;
			width: 100px;
			height: 100px;
			background: #fff;
			border-radius: 100%;
			margin-right: 10px;
			position: relative;
			overflow: hidden;
			background-image: url('/img/user.jpg');
			background-size: cover;
		}
		.users-list__tab-img img {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			object-fit: cover;
			width: 100px;
			height: 100px;
		}

		
	</style>
