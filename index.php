<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title>Lazaro Monteiro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								<h1>Lazaro Monteiro</h1>
								<p> Software developer with background in web development. Master of Science in Computer Science from UFERSA and UERN. </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#about">About Me</a></li>
								<li><a href="#work">My Work</a></li>
								<li><a href="#contact">Contact</a></li>
								<!-- <li><a href="#elements">Elements</a></li> -->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<!-- Work -->
							<article id="work" style class="large">
								<h2 class="major">My Work</h2>
								<h3>Container Terminal Information System (CTIS)</h3>
								<span class="image main"><img src="images/port.jpg" alt="" /></span>
								<ul>
									<li>
										Re-engineered a legacy system into a modern web application using <b>C#</b> for the back-end and <b>Node JS/React</b> with <b>DevExtreme UI Kit</b> for the front-end. This system was critical for one of the largest container ports in the Americas, but it was no longer maintainable due to the obsolescence of the original language.
									</li>
									<li>
										The new system significantly reduced response times, enhanced security, was fully compatible with smartphones and tablets, and also included several new features. Finally, the client become able to manage the application independently, thanks to improved documentation, organized code structure, and the use of established languages with strong community support, ensuring long-term maintainability.
									</li>
								</ul>
								<h3>Anti-Aliasing Method Based on Rotated Spatial Filtering</h3>
								<span class="image main"><img src="images/repair-aa.jpg" alt="" /></span>
								<ul>
									<li>
										Research published at the Springer Multimedia Tools and Applications Journal <a href="https://link.springer.com/article/10.1007/s11042-024-18632-y" class="icon solid fa-link" target="_blank"><span class="label">link</span></a>
									</li>
									<li> 
										Master Thesis: Anti-­Aliasing Method Based on Rotated Spatial Filtering <a href="https://repositorio.ufersa.edu.br/items/46a8cbfd-f226-44dd-809a-9be3aaed537b" class="icon solid fa-link" target="_blank"><span class="label">link</a>
									</li>
									<li>
										Project available at GitHub <a href="https://github.com/lazaromjr/REPAIR-Anti-Aliasing" class="icon solid fa-link" target="_blank"><span class="label">lin</span></a>
									</li>
									<!-- -->
									<li style="padding-top: 1rem;">
										Developed a post-filtering anti-aliasing method that uses digital image processing tools to smooth the regions around the edges where there is a higher probability that aliasing will occur. As with other anti-aliasing methods, it aims to improve the visual perception of digital images by smoothing aliasing effects caused by unavoidable undersampling issues.
									</li>
									<li>
										The method improved the quality of all tested images, working on all edges, shadows, textures, not affecting the illumination, as expected. It executes in the right places and in the right direction, being simple and cost-efficient. Overall, the results were satisfactory.
									</li>
								</ul>
								<h3>Totvs Protheus ERP Support</h3>
								<span class="image main"><img src="images/erp.jpg" alt="" /></span>
								<ul>
									<li>
										Offered user support by resolving technical problems related to the Totvs Protheus, an Enterprise Resource Planning (ERP) system designed to integrate and manage core business processes across an organization.
									</li>
									<li>
										Led implementations, provided training sessions and developed comprehensive user manuals to facilitate adoption and enhance productivity.
									</li>
								</ul>
								<h3>Analysis of Reflectivity Profiles Obtained from a Micro Rain Radar - MRR-2</h3>
								<span class="image main"><img src="images/mrr2.jpg" alt="" /></span>
								<ul>
									<li>
										Research presented at XXXVIII National Meeting of Condensed Matter Physics
									</li>
									<li>
										Research presented at XXI Scientific Initiation Seminar of UFERSA
									</li>
									<!-- -->
									<li style="padding-top: 1rem;">
										Developed a <b>C++</b> application to process and analyze reflectivity profiles collected via a Micro Rain Radar (MRR-2), which employs Doppler frequency to measure several rain parameters up to 6,200 meters above the radar.
									</li>
									<li>
										The results described the diurnal cycle of weather systems operating in the region, contributing to the development of theoretical models to enhance the accuracy of regional weather forecast.
									</li>
								</ul>
							</article>

						<!-- About Me -->
							<article id="about">
								<h2 class="major">About Me</h2>
								<span class="image left"><img src="images/profile-edit.jpg" alt="" /></span>
								<p> I am a software developer with background in web development, system architecture, and research-driven problem-solving. Skilled in <b>C#</b>, <b>React</b>, <b>.NET</b>, and data-driven solutions, with experience modernizing legacy systems and delivering high-performance applications. Proven ability to bridge academic research (e.g., anti-aliasing algorithms) with software development. Adept at full-stack development, agile methodologies, and cross-platform solutions, driven by a passion for innovation and technical excellence. </p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" enctype="application/x-www-form-urlencoded">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" required />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" required />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4" required ></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
									<?php include("assets/php/send-email.php"); ?>
								</form>
								<ul class="icons">
									<li><a href="https://t.me/lazaromjr" class="icon brands fa-telegram" target="_blank"><span class="label">Telegram</span></a></li>
									<li><a href="mailto:contact@lazaromonteiro.com" class="icon fa-envelope"><span class="label">E-mail</span></a></li>
									<li><a href="https://github.com/lazaromjr" class="icon brands fa-github" target="_blank"><span class="label">GitHub</span></a></li>
									<li><a href="https://www.linkedin.com/in/lazaromjr/" class="icon brands fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
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
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
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
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
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
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Lazaro R. Monteiro Junior. Design: <a href="https://html5up.net" target="_blank">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		
	</body>
</html>
