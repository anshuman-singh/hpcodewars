@extends('layout.default')

@include('layout.navbar')

@section('content')

<section class="stars">
	<div class="twinkling">
		<div class="container marvin-blk" id="main">
			<div class="main-content">
				<div class="marvin-img hidden-xs hidden-sm">
					<img src="images/marvin-lh.png" class="marvin-left" alt="">
					<img src="images/marvin-body.png" alt="">
					<img src="images/marvin-rh.png" class="marvin-right" alt="">
				</div>
				<div class="marvin-msg pull-right">Welcome all code warriors! <br> R&amp;D Code Wars is a programming competition for India R&D organization which includes EG, ATMY, ES Engineering, PPS and HPSW.<br><br>
					<a href="#rules" data-scroll class="btn btn-primary btn-lg">Guidelines</a>
					<a href="{{URl::route('account-create')}}" class="btn btn-primary btn-lg">Register</a>

				</div>
			</div>
		</div>
	</div>
</section>

<div class="event-blk" id="calendar">
	<div class="container">
		<div class="col-lg-8 col-lg-offset-2">
			<h2 class="text-center">Event Calendar</h2>			
			<div class="panel panel-default">
	            <div class="panel-heading">Registration</div>
	            <div class="panel-body">
				3rd September, 2014 - 5th September, 2014
	            </div>
	        </div>
	
	        <div class="panel panel-default">
	            <div class="panel-heading">Prelims</div>
	           	<div class="panel-body">
	           		<div class="pull-left">Challenge 1</div>
	           		<div class="pull-right">8th September</div>
	           		<div class="clearfix"></div>
	           		<div class="pull-left">Challenge 2</div>
	           		<div class="pull-right">10th September</div>
	           		<div class="clearfix"></div>
	           		<div class="pull-left">Challenge 3</div>
	           		<div class="pull-right">12th September</div>
	           	</div>
	        </div>
	
	        <div class="panel panel-default">
	            <div class="panel-heading">Finals</div>
	            <div class="panel-body">
	            	Venue – STSD Enclosed Cafeteria <br>Date – 18th Sep, 10:00 am to 5:00 pm </code>
	            </div>
	        </div>
		</div>
	</div>
</div>


<div class="rules-blk" id="rules">
	<div class="container">
		<h2 class="text-center">Rules of Engagement</h2>
		<div class="panel panel-default">
		        <div class="panel-heading">Contest Guidelines</div>
			<div class="panel-body">
		            <ol class="c-guide">
		            	<li>The contest is open to all HP employees who are a part of EG, ATMY, ES Engineering, PPS and HPSW, R&amp;D organizations in Bangalore</li>
		            	<li>The portal will be open from 10:00 am on each of the contest days to 10:00 am on the next day.</li>
		            	<li>There can be only 2 members in a team.</li>
		            	<li>The same team participating in the online contest if shortlisted would participate in the finals as well. No change in team members permitted post submission. </li>
		            	<li>There can’t be multiple submissions per team for same questions. However, team can choose to  submit answers for both (in separate submissions).</li>
		            	<li>The solution can be submitted only up-to the time given via the portal. No separate email submissions will be allowed.</li>
		            	<li>The submission has to be original code written by the team members. Use of libraries or utilities beyond the ones stipulated by the contest is not allowed.</li>
		            	<li>All decisions regarding the evaluation of the submissions will be final.</li>
		            </ol>
		        </div>
		</div>
		
		<div class="panel panel-default">
		        <div class="panel-heading">Submission Guidelines</div>
			<div class="panel-body">
		            <ol class="s-guide">
		            	<li>The solution has to be submitted in the form of either tar/zip/tar.gz file that is to be uploaded via the portal. The size limit of the archive is 1 MB.</li>
		            	<li>File name should be  either <strong>Solution1.zip</strong> or <strong>Solution1.tar</strong> or <strong>Solution1.tar.gz</strong>. </li>
		            	<li>If the team wants to submit more than one question, they need to be  submitted separately in the link given. Don’t submit answers for both questions in single file. </li>
		            	<li>Content of the submission artifact should be a single source code file and a README (optional).README may contain the brief explanation of  the program logic, design and limitations.</li>
		            	<li>Do not upload any binaries as a part of the submission.</li>
		            </ol>
		        </div>
		</div>
		
		<div class="panel panel-default">
		        <div class="panel-heading">Evaluation Criteria</div>
			<div class="panel-body">
		            <ol class="e-guide">
		            	<li>Functional Correctness: Solutions will be ranked by the most number of correct output for the input test cases.</li>
		            	<li>Teams who have solved both problems will be ranked higher.</li>
		            	<li>Code Quality, Efficiency, and Hygiene.</li>
		            	<li>Judges' decision will be final in all cases.</li>
		            </ol>
		            <div class="e-guide">
		            	The given problem has to be solved by writing code in either of the following languages : C, C++, Java<br><br>
					<h3 class="">For C/C++ programs,</h3>
					<ol>
						<li>For C program, the file extension should be .c</li>
						<li>For C++ program, the file extension should be .cxx only</li>
						<li>You can use any compiler to test your program, but it should be compilable in  gcc/g++ version 4.x and above. <br>
						Compilation command used would be <br>
						For C program,<br>
						<code>gcc -g -o outputname file to be compiled</code><br>
						For C program,<br>
						<code>gcc -g -o outputname file to be compiled</code><br>
						</li>
						<li>You can use standard C/C++ run time libraries only and you can't use any third party libraries.</li>
						<li>For C++ programs, you can use STL. <br>
						<strong>Note: </strong>For MSVC users, don't include windows.h, Win 32 API's and MFC classes.</li>
					</ol>
					<ol class="guide-program">
						<h4 class="">For Java programs, version 1.6 will be used</h4>
						<li>Compilation: <code>javac -g file to be compiled.java</code></li>
						<li>In Java, you may use the standard packages java.lang, java.io, java.text, java.math, and java.util and their subpackages. You should not use utilities such as yacc, bison, lex, or flex to produce programs. </li>
					</ol>
					<ol class="guide-program">
						<h4 class="">For all programs</h4>
						<li>Your programs may not use  OS/Platform Specific functions for portability.</li>
						<li>Since, single file is allowed, arrange your code to be more readable. </li>
					</ol>
					<ol class="guide-program">
						<h4 class="">Execution</h4>
						<li>Your program should be able to read the inputs from stdin and redirect the output to stdout.  For each question, input and output formats are provided in the questions.</li>
					</ol>
		        </div>
		</div>
		</div>
	</div>
</div>


<div class="faq-blk" id="faq">
	<section class="container">
		<h2 class="text-center">Frequently Asked Questions</h2>
		<div class="row">
            <div class="col-lg-6">
				<div class="each-faq">
					<h5>
						1. I do not have a team and would like to participate, can I?
					</h5>
					<p>
						No, the team size is 2. 
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
						Only if your submission has failed send an email to <i>"codewarcommandos@hp.com"</i> with the following details: your name, file name, and emp id.
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
            <div class="col-lg-6">
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

@stop