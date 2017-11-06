<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

	@$id =$_REQUEST['error'];
	if ($id == "99"){
	$message = "โปรดตรวจสอบข้อมูลของท่านอีกครั้ง!";
	}
	if ($id == "98"){
		$message = "รหัสผ่านผิดพลาด!";
	}
	else{
		$message = "ยินดีต้อนรับ!";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
	
 ?>
<html>
	<head>
		<title>To Do List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" href="images/icon.png">
	</head>
	
		
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>CS286 Project</h1>
<!--			
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
-->
						<div class="content">
							<div class="inner">
							<img src="images/tlogo2.png" width="400">

								<p>Optimize For Future, Optimal Solution</p>
								
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#login">Login</a></li>
								<li><a href="#register">Register</a></li>
								<li><a href="#work">About</a></li>
								<!--<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="#elements">element</a></li>
								<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Login -->
							<article id="login">
								<h2 class="major">Login</h2>
								<form method="post" action="login.php">
									<div class="field half first">
										<label for="name">UserName</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="pass">Password</label>
										<input type="password" name="pass" id="pass" />
									</div>
									
									<ul class="actions">
										<li><input type="submit" value="Login" class="special" /></li>
<!--										<input type="button" onclick="window.location.href='User.html'" value="Login" class = "special"/></li>-->
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
							
								<!-- Login -->
							<article id="register">
								<h2 class="major">Register</h2>
								<form method="post" action="register.php">
									
									<div class="field half first">
										<label for="name">UserName</label>
										<input type="text" name="name" id="name"required />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="email" name="email" id="email"required />
									</div>
									<div class="field half first">
										<label for="pass1">Password</label>
										<input type="password" name="pass1" id="pass1"required />
									</div>
									<div class="field half">
										<label for="pass2">Re-Password</label>
										<input type="password" name="pass2" id="pass2"required />
									</div>
									<div class="field half first">
										<label for="fname">FirstName</label>
										<input type="text" name="fname" id="fname"required />
									</div>
									<div class="field half">
										<label for="lname">LastName</label>
										<input type="text" name="lname" id="lname"required />
									</div>
									
									<div class="field">
									<label for="demo-category">Type</label>
												<select name="type" id="type" required>
													<option value="">-- Select --</option>
													<option value="1">User</option>
													<option value="9" hidden>Admin</option>
												</select>
											</div>
									<ul class="actions">
										<li><input type="submit" value="Submit"/></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/tj.jpg" alt="" /></span>
								<h2>ทำไมถึงต้องใช้ To do list ?</h2>
								<p>หลายครั้งมีคนถามฉันว่า บริหารจัดการเวลาอย่างไร จึงสามารถทำโน่นทำนี่ได้เยอะแยะมากมายอย่างน่าอิจฉา  และอาจกล่าวเลยไปถึงการเป็นอัจฉริยะที่สามารถทำอะไรได้หลายอย่างในเวลาเดียวกันกระมัง    จริงๆ แล้วมีเคล็ดลับเล็กๆ กับเจ้าเครื่องมือบริหารเวลาอันทรงประสิทธิผลที่เรียกว่า  To do list  เท่านั้นที่ช่วยให้ฉันสามารถเดินฝ่าวันที่วุ่นวาย  รวมถึงการได้ทำสิ่งที่รักได้โดยไม่ใช่เวลาเดียวกัน   หากแต่เป็นการวางแผนทำทีละอย่างตามช่วงเวลาที่กำหนดรวมถึงการจัดลำดับความสำคัญ  และไม่ว่าฉันจะเล่าให้ใครฟังสักกี่ครั้งกี่หนก็ชอบที่จะแนะนำเจ้าเครื่องมือนี้สู่ชีวิตของพวกเขาด้วย</p>
								<p>To do list ช่วยอะไรฉันได้?

ในบรรดาเครื่องมือการบริหารจัดการเวลาทั้งหลาย  To do list ได้กลายเป็นนิสัยส่วนตัวของฉันไปแล้ว มันใช้ง่าย และทำได้ทุกที่ทุกเวลา  มันช่วยให้ฉันสามารถจัดการกองงานมหาศาลให้เป็นระเบียบ และทำให้ฉันทำงานได้อย่างเป็นระบบ  อย่างไม่หลงลืมสิ่งสำคัญใด  นอกเหนือจากนั้นมันยังช่วยให้คนทำงานอย่างเกรงใจเรา  เพราะเรามีการวางแผนงานที่ดี สามารถจัดลำดับความสำคัญได้  รวมถึงมองเห็นความเชื่อมโยงระหว่างงานที่เราจดลงไป  และมันทำให้เราตามงานจากผู้ร่วมงานได้อย่างมีประสิทธิภาพด้วย</p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<br><p></p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="field half first">
											<label for="demo-name">Name</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
										</div>
										<div class="field half">
											<label for="demo-email">Email</label>
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
										</div>
										<div class="field">
											<label for="demo-category">Category</label>
											<div class="select-wrapper">
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div>
										<div class="field half first">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="field half">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="field half first">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="field half">
											<input type="checkbox" id="demo-human" name="demo-human" checked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="field">
											<label for="demo-message">Message</label>
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
