<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta charset="UTF-8">
	<title>Code Wars</title>
	<link rel="stylesheet" href="{{ URL::asset('lib/uikit/css/uikit.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css')}}">
	<script src="lib/jquery.js"></script>
	// <script src="lib/uikit/js/uikit.min.js"></script>
	<script src="lib/uikit/js/addons/sticky.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
</head>
<body>

	
			
			@if(Session::has('global'))
				<p>{{ Session::get('global')}}</p>
			@endif
		
			
        <!-- <div class="content-block">
        	<div>
        		Dont PANIC !!!
        	</div> -->
        
       

		
	<section class="stars">
        	@yield('formContent')
        	@yield('formContentForget')
		<div class="twinkling">
			<div class="uk-container uk-container-center marvin-blk" id="main">
				<div class="main-content">
					<div class="marvin-img">
						<img src="/images/marvin-lh.png" class="marvin-left" alt="">
						<img src="/images/marvin-body.png" alt="">
						<img src="/images/marvin-rh.png" class="marvin-right" alt="">
					</div>
					<!-- <div class="marvin-msg">Welcome code warriers! <br> I am Marvin</div> -->
				</div>
			</div>
		</div>
	</section>
	<div class="event-blk" id="calendar">
		<section class="uk-container uk-container-center">
			<h2 class="uk-h1 uk-text-center">Event Calendar</h2>

			<div class="uk-panel uk-panel-box uk-panel-box-secondary">
                <h3 class="uk-panel-title">Registration</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>

            <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                <h3 class="uk-panel-title">Prelims</h3>
               Online Submissions – 27th April 10:00 am to 28th April 10:00 am </code>
            </div>

            <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                <h3 class="uk-panel-title">Finals</h3>
                Venue – STSD Enclosed Cafeteria <br>Date – 4th May, 10:00 am to 5:00 pm </code>
            </div>
		</section>
	</div>
	<div class="rules-blk" id="rules">
		<section class="uk-container uk-container-center">
			<h2 class="uk-h1 uk-text-center">Rules of Engagement</h2>
			<div class="uk-panel uk-panel-box uk-panel-box-primary">
                <h2 class="uk-panel-title">Contest Guidelines</h2>
                <ol class="c-guide">
                	<li>The contest is open to all HP employees who are a part of ESSN, HPSW, PPS(IPG), BSO, HP Labs, HP IM R&amp;D organizations in Bangalore</li>
                	<li>The portal will be open from 27th April 10:00 am to 28th April 10:00 am.</li>
                	<li>There can be a maximum of 3 members in a team per submission</li>
                	<li>The same team participating in the online contest if shortlisted would participate in the finals as well. No change in team members permitted post submission. </li>
                	<li>There can’t be multiple submissions per team for same questions. However, team can choose to  submit answers for both (in separate submissions).</li>
                	<li>The solution can be submitted only up-to the time given via the portal. No separate email submissions will be allowed.</li>
                	<li>The submission has to be original code written by the team members. Use of libraries or utilities beyond the ones stipulated by the contest is not allowed.</li>
                	<li>All decisions regarding the evaluation of the submissions will be final.</li>
                </ol>
            </div>

            <div class="uk-panel uk-panel-box uk-panel-box-primary">
                <h2 class="uk-panel-title">Submission Guidelines</h2>
                <ol class="s-guide">
                	<li>The solution has to be submitted in the form of either tar/zip/tar.gz file that is to be uploaded via the portal. The size limit of the archive is 1 MB.</li>
                	<li>File name should be  either <strong>Solution1.zip</strong> or <strong>Solution1.tar</strong> or <strong>Solution1.tar.gz</strong>. </li>
                	<li>If the team wants to submit more than one question, they need to be  submitted separately in the link given. Don’t submit answers for both questions in single file. </li>
                	<li>Content of the submission artifact should be a single source code file and a README (optional).README may contain the brief explanation of  the program logic, design and limitations.</li>
                	<li>Please do not upload any binaries as a part of the submission.</li>
                </ol>
            </div>

            <div class="uk-panel uk-panel-box uk-panel-box-primary">
                <h2 class="uk-panel-title">Evaluation Criteria</h2>
                <ol class="e-guide">
                	<li>Functional Correctness: Solutions will be ranked by the most number of correct output for the input test cases.</li>
                	<li>Teams who have solved both problems will be ranked higher.</li>
                	<li>Code Quality, Efficiency, and Hygiene.</li>
                	<li>Judges' decision will be final in all cases.</li>
                </ol>
                <div class="e-guide">
                	The given problem has to be solved by writing code in either of the following languages : C, C++, Java<br><br>
					<h2 class="uk-panel-title">For C/C++ programs,</h2>
					<ol>
						<li>For C program, the file extension should be .c</li>
						<li>For C++ program, the file extension should be .cxx only</li>
						<li>You can use any compiler to test your program, but it should be compilable in  gcc/g++ version 4.x and above. <br>
						Compilation command used would be <br>
						<strong>For C program,</strong><br>
						<code>gcc -g -o outputname file to be compiled</code><br>
						<strong>For C program,</strong><br>
						<code>gcc -g -o outputname file to be compiled</code><br>
						</li>
						<li>You can use standard C/C++ run time libraries only and you can't use any third party libraries.</li>
						<li>For C++ programs, you can use STL. <br>
						<strong>Note: </strong>For MSVC users, don't include windows.h, Win 32 API's and MFC classes.</li>
					</ol>
					<ol class="guide-program">
						<h3 class="uk-panel-title"><strong>For Java programs, version 1.6 will be used</strong></h3>
						<li>Compilation: <code>javac -g file to be compiled.java</code></li>
						<li>In Java, you may use the standard packages java.lang, java.io, java.text, java.math, and java.util and their subpackages. You should not use utilities such as yacc, bison, lex, or flex to produce programs. </li>
					</ol>
					<ol class="guide-program">
						<h3 class="uk-panel-title"><strong>For all programs</strong></h3>
						<li>Your programs may not use  OS/Platform Specific functions for portability.</li>
						<li>Since, single file is allowed, arrange your code to be more readable. </li>
					</ol>
					<ol class="guide-program">
						<h3 class="uk-panel-title"><strong>Execution</strong></h3>
						<li>Your program should be able to read the inputs from stdin and redirect the output to stdout.  For each question, input and output formats are provided in the questions.</li>
					</ol>
                </div>
            </div>
		</section>
	</div>
	<div class="faq-blk" id="faq">
		<section class="uk-container uk-container-center">
			<h2 class="uk-h1 uk-text-center">Frequently Asked Questions</h2>

			<div class="uk-grid">
                <div class="uk-width-1-2">
					<div class="each-faq">
						<h5>
							1. I do not have a team and would like to participate, can I?
						</h5>
						<p>
							No, the minimum team size required is 2. 
						</p>
					</div>

					<div class="each-faq">
						<h5>
							2.	How do I know that my submission has been successful?
						</h5>
						<p>
							You’ll get a confirmation message pop up on the portal saying “Your file <filename> has been submitted successfully”
						</p>
					</div>

					<div class="each-faq">
						<h5>
							3.	I am clicking the submit button but I’m not getting the confirmation message? 
						</h5>
						<p>
							Only if your submission has failed send an email to CodeWarAdmins@hp.com with the following details: your name, file name, and emp id.
						</p>
					</div>

					<div class="each-faq">
						<h5>
							4.	How many submissions are allowed per team?
						</h5>
						<p>
							Only one submission per team is allowed for each question. You have two questions for submission. You can make submissions for both questions. Do refer the evaluation criteria for more details on this
						</p>
					</div>
                </div>
                <div class="uk-width-1-2">
                	<div class="each-faq">
						<h5>
							5.	If there are multiple submissions then which submission would be considered as final?
						</h5>
						<p>
							The first submission for a question by a team will be considered. Multiple submissions per question are not allowed. 
						</p>
					</div>

					<div class="each-faq">
						<h5>
							6.	What programming languages can I use to solve the problems?
						</h5>
						<p>
							You can use C, C++ or Java 
						</p>
					</div>

					<div class="each-faq">
						<h5>
							7.	What are the requirements for uploading code files? Which format we need to upload it in?
						</h5>
						<p>
							The solution has to be submitted in the form of a tar/zip/tar.gz file that is to be uploaded via the portal. The size limit of the archive is 1 MB. <br><br>
							File name should be <strong>Solution1.zip</strong> or <strong>Solution1.tar</strong> or <strong>Solution1.tar.gz</strong> <br> <br>
							If the team wants to submit more than one question, they need to be submitted separately in the link given. Don’t submit answers for both questions in single file.  <br><br>
							Typical content of the submission artifact should be a single source code file and a README (optional).README may contain the brief explanation of the program logic, design and limitations.

						</p>
					</div>
                </div>
            </div>
		</section>
		
	</div>
</body>
<footer>
		All Rights Reserved
</footer>
</html>