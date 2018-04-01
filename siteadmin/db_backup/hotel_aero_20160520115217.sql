# Database Backup for hotel 
# Database Name: hotel_aero
# Database Server: localhost
# 
# Backup Date: 2016-05-20 :: 11:52:17

drop table if exists tbl_administrator;
create table tbl_administrator (
  fld_id int(11) not null auto_increment,
  fld_name varchar(50) ,
  fld_username varchar(25) not null ,
  fld_userpass varchar(50) not null ,
  fld_email varchar(50) not null ,
  fld_phone varchar(50) ,
  fld_facebook varchar(255) not null ,
  fld_twitter varchar(255) not null ,
  fld_linkedin varchar(255) not null ,
  fld_googleplus varchar(255) not null ,
  fld_llogintime datetime ,
  fld_lloginip varchar(25) ,
  fld_datetime datetime not null ,
  fld_company_name varchar(255) not null ,
  fld_address varchar(255) not null ,
  fld_contact_number varchar(255) not null ,
  fld_map blob not null ,
  fld_status int(11) default '1' not null ,
  PRIMARY KEY (fld_id)
);

insert into tbl_administrator (fld_id, fld_name, fld_username, fld_userpass, fld_email, fld_phone, fld_facebook, fld_twitter, fld_linkedin, fld_googleplus, fld_llogintime, fld_lloginip, fld_datetime, fld_company_name, fld_address, fld_contact_number, fld_map, fld_status) values ('1', 'Administrator', 'admin', 'swt0550', 'info@hotelaeroview.com', '+1 015 344 343 31', 'https://www.facebook.com/', 'https://twitter.com/', 'https://in.linkedin.com/', 'https://plus.google.com/', '2016-05-20 10:09:03', '::1', '2016-01-01 00:00:00', 'Hotel Aero View', 'A-67, Mahipal Extn. National Highway - 8,Near I.G.I Airport', '455454', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.1637411988!2d76.81306336337683!3d28.647279935669474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1462625877206\" id=\"loctionmap\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border-top:#ccc 5px solid; margin-top:20px;pointer-events:none\" allowfullscreen></iframe>', '1');


drop table if exists tbl_appliedfor;
create table tbl_appliedfor (
  id int(11) not null auto_increment,
  user_id int(11) not null ,
  course_id int(11) not null ,
  applied_date varchar(50) not null ,
  status int(11) default '0' not null ,
  flag int(11) default '1' not null ,
  PRIMARY KEY (id)
);

insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('1', '4', '7', '2016-04-04 01:35:37', '0', '3');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('2', '4', '8', '2016-04-05 01:36:51', '1', '3');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('3', '4', '8', '2016-04-06 11:58:30', '0', '4');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('4', '4', '8', '2016-04-07 10:52:11', '0', '4');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('5', '4', '8', '2016-04-06 10:52:57', '0', '3');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('6', '9', '62', '16-04-12 02:56:58', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('7', '9', '62', '2016-04-12 02:58:08', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('8', '10', '47', '16-04-12 03:06:13', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('9', '9', '62', '2016-04-12 03:08:51', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('10', '11', '62', '16-04-12 03:09:27', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('11', '8', '0', '2016-04-12 03:27:07', '0', '1');
insert into tbl_appliedfor (id, user_id, course_id, applied_date, status, flag) values ('12', '8', '0', '2016-04-12 03:27:08', '0', '1');


drop table if exists tbl_articles;
create table tbl_articles (
  fld_id int(11) not null auto_increment,
  fld_title text not null ,
  fld_description text not null ,
  fld_date varchar(50) not null ,
  fld_image varchar(255) not null ,
  fld_meta_title text not null ,
  fld_meta_description text not null ,
  fld_meta_keywords text not null ,
  fld_status varchar(50) default 'Active' not null ,
  PRIMARY KEY (fld_id)
);

insert into tbl_articles (fld_id, fld_title, fld_description, fld_date, fld_image, fld_meta_title, fld_meta_description, fld_meta_keywords, fld_status) values ('3', 'Relax in a beautiful contest', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
', '05-04-2016 12:08:16', 'drink..jpg', 'Relax in a beautiful contest', 'Relax in a beautiful contest', 'Relax in a beautiful contest', 'Active');
insert into tbl_articles (fld_id, fld_title, fld_description, fld_date, fld_image, fld_meta_title, fld_meta_description, fld_meta_keywords, fld_status) values ('4', 'Cozy and Charming rooms', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
', '05-04-2016 12:08:43', 'camera..jpg', 'Cozy and Charming rooms', 'Cozy and Charming rooms', 'Cozy and Charming rooms', 'Active');
insert into tbl_articles (fld_id, fld_title, fld_description, fld_date, fld_image, fld_meta_title, fld_meta_description, fld_meta_keywords, fld_status) values ('7', 'Discover typical Food', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
', '16-05-2016 05:25:44', 'plate..jpg', 'Discover typical Food', 'Discover typical Food', 'Discover typical Food', 'Active');


drop table if exists tbl_backup;
create table tbl_backup (
  fld_id int(11) not null auto_increment,
  fld_backupname varchar(255) ,
  fld_date datetime ,
  PRIMARY KEY (fld_id)
);

insert into tbl_backup (fld_id, fld_backupname, fld_date) values ('1', 'DB_20150814160217.sql', '2015-08-14 16:02:17');
insert into tbl_backup (fld_id, fld_backupname, fld_date) values ('2', 'DB_20151015153748.sql', '2015-10-15 15:37:48');
insert into tbl_backup (fld_id, fld_backupname, fld_date) values ('3', 'DB_20151125182000.sql', '2015-11-25 18:20:01');
insert into tbl_backup (fld_id, fld_backupname, fld_date) values ('4', 'DB_20160217161632.sql', '2016-02-17 16:16:33');
insert into tbl_backup (fld_id, fld_backupname, fld_date) values ('15', 'DB-2016-01-11-18-45-14.zip', '2016-01-11 18:45:14');


drop table if exists tbl_category;
create table tbl_category (
  fld_id int(11) not null auto_increment,
  fld_name varchar(100) not null ,
  fld_parentid int(11) default '0' not null ,
  fld_addedon datetime not null ,
  fld_status enum('Active','Inactive') default 'Active' not null ,
  fld_featured int(11) not null ,
  fld_catimage varchar(255) not null ,
  PRIMARY KEY (fld_id)
);

insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('1', 'Courses by Vendor', '0', '0000-00-00 00:00:00', 'Active', '0', '');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('2', 'Technology', '9', '0000-00-00 00:00:00', 'Active', '1', 'icon01IMG2016183157569.png');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('3', 'Management', '8', '0000-00-00 00:00:00', 'Active', '1', 'userIMG2016183229729.png');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('4', 'Finance', '8', '0000-00-00 00:00:00', 'Active', '1', 'dollarIMG2016183248470.png');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('5', 'Job Prep Courses', '8', '0000-00-00 00:00:00', 'Active', '1', 'jobIMG2016183308442.png');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('6', 'Quick Skilling Courses', '8', '0000-00-00 00:00:00', 'Active', '1', 'courseIMG2016183332244.png');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('8', 'Business Courses', '0', '0000-00-00 00:00:00', 'Active', '0', '');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('9', 'Technology Courses', '0', '0000-00-00 00:00:00', 'Active', '0', '');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('10', 'Management', '8', '0000-00-00 00:00:00', 'Active', '0', 'womenIMG2016194214667.jpg');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('11', 'Graduation Degree', '1', '0000-00-00 00:00:00', 'Active', '1', '');
insert into tbl_category (fld_id, fld_name, fld_parentid, fld_addedon, fld_status, fld_featured, fld_catimage) values ('12', 'Post Graduation1', '8', '0000-00-00 00:00:00', 'Active', '0', '');


drop table if exists tbl_contactpage;
create table tbl_contactpage (
  id int(11) not null auto_increment,
  email varchar(255) not null ,
  phone varchar(255) not null ,
  address varchar(255) not null ,
  map text not null ,
  PRIMARY KEY (id)
);

insert into tbl_contactpage (id, email, phone, address, map) values ('1', '  testingprojectswt@gmail.com 
test@gmail.copm ', '011-4504 4000 (10 Lines)
 09654433438', 'Apar India, 6, Community Centre,
Sector-8, Rohini,
Delhi-110085', '<script src=\'https://maps.googleapis.com/maps/api/js?v=3.exp\'></script><div style=\'overflow:hidden;height:150px;width:250px;\'><div id=\'gmap_canvas\' style=\'height:150px;width:250px;\'></div><div><small><a href=\"http://embedgooglemaps.com\">									embed google maps							</a></small></div><div><small><a href=\"http://freedirectorysubmissionsites.com/\">link directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type=\'text/javascript\'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(28.670951,77.08096699999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById(\'gmap_canvas\'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.670951,77.08096699999999)});infowindow = new google.maps.InfoWindow({content:\'<strong>Apar India</strong><br>6, Community Centre, Sector-8, Rohini, Delhi-110085<br>\'});google.maps.event.addListener(marker, \'click\', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, \'load\', init_map);</script>');


drop table if exists tbl_courses;
create table tbl_courses (
  fld_id int(11) not null auto_increment,
  fld_name varchar(255) not null ,
  fld_catid varchar(255) not null ,
  fld_universityid int(11) not null ,
  fld_fee varchar(255) not null ,
  fld_duration varchar(255) not null ,
  fld_eligibility_criteria varchar(255) not null ,
  fld_modeofdelhivery varchar(255) not null ,
  fld_featured int(11) not null ,
  fld_coursehighlight text not null ,
  fld_benifits text not null ,
  fld_eligibilityinfo text not null ,
  fld_curriculum text not null ,
  fld_uploadfile varchar(255) not null ,
  fld_addedon varchar(255) not null ,
  fld_status varchar(255) default 'Active' not null ,
  PRIMARY KEY (fld_id)
);

insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('2', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '<ul>
	<li>
	<h3>Fundamentals Of SEM</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Flexibility In Learning</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Display Campaigns Using Google AdWords</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Industry Recognized Certificate</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Practice Quizzes And MCQs</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Job Opportunities</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
</ul>
', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'aparindia.docx', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('3', 'BAC', '2', '1', '9666', '2 Years', '10 + 2 Pass', 'Class Room', '0', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '<ul>
	 <li>
	 <h3>Fundamentals Of SEM</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Flexibility In Learning</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Display Campaigns Using Google AdWords</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Industry Recognized Certificate</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Practice Quizzes And MCQs</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Job Opportunities</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	
	</ul>', '<ul class=\"sectionlist\">
						<li><span>32 hours of Instructor-led Training</span></li>
						<li><span>29 hours of High Quality E-Learning content</span></li>
						<li><span>137 End-of-Chapter Quizzes & 2 Simulation Exams each</span></li>
						<li><span>3 Industry Case studies and 20 Real world industry examples</span></li>
						<li><span>PRINCE2® Foundation and Practitioner Exam Fee Included</span></li>
						<li><span>98.6% Pass rate</span></li>
				  
				  </ul>', '<div class=\"accordion1\">
      <h3 class=\"panel-title\"><span class=\"text1\">1</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
	  
	   <h3 class=\"panel-title\"><span class=\"text1\">2</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
    	  
		   <h3 class=\"panel-title\"><span class=\"text1\">3</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
		  
	 
	  
  </div>', 'images (6).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('4', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '<ul>
	<li>
	<h3>Fundamentals Of SEM</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Flexibility In Learning</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Display Campaigns Using Google AdWords</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Industry Recognized Certificate</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Practice Quizzes And MCQs</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Job Opportunities</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
</ul>
', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('5', 'C++', '4', '15', '3443', '6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '<ul>
	 <li>
	 <h3>Fundamentals Of SEM</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Flexibility In Learning</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Display Campaigns Using Google AdWords</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Industry Recognized Certificate</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Practice Quizzes And MCQs</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Job Opportunities</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	
	</ul>', '<ul class=\"sectionlist\">
						<li><span>32 hours of Instructor-led Training</span></li>
						<li><span>29 hours of High Quality E-Learning content</span></li>
						<li><span>137 End-of-Chapter Quizzes & 2 Simulation Exams each</span></li>
						<li><span>3 Industry Case studies and 20 Real world industry examples</span></li>
						<li><span>PRINCE2® Foundation and Practitioner Exam Fee Included</span></li>
						<li><span>98.6% Pass rate</span></li>
				  
				  </ul>', '<div class=\"accordion1\">
      <h3 class=\"panel-title\"><span class=\"text1\">1</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
	  
	   <h3 class=\"panel-title\"><span class=\"text1\">2</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
    	  
		   <h3 class=\"panel-title\"><span class=\"text1\">3</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
		  
	 
	  
  </div>', 'images (4).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('6', 'PHP', '4', '1', '3000', '1 Years', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '<ul>
	 <li>
	 <h3>Fundamentals Of SEM</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Flexibility In Learning</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Display Campaigns Using Google AdWords</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Industry Recognized Certificate</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	 
	  <li>
	 <h3>Practice Quizzes And MCQs</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	 
	<li>
	 <h3>Job Opportunities</h3>
	 <p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	 </li>
	
	</ul>', '<ul class=\"sectionlist\">
						<li><span>32 hours of Instructor-led Training</span></li>
						<li><span>29 hours of High Quality E-Learning content</span></li>
						<li><span>137 End-of-Chapter Quizzes & 2 Simulation Exams each</span></li>
						<li><span>3 Industry Case studies and 20 Real world industry examples</span></li>
						<li><span>PRINCE2® Foundation and Practitioner Exam Fee Included</span></li>
						<li><span>98.6% Pass rate</span></li>
				  
				  </ul>', '<div class=\"accordion1\">
      <h3 class=\"panel-title\"><span class=\"text1\">1</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
	  
	   <h3 class=\"panel-title\"><span class=\"text1\">2</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
    	  
		   <h3 class=\"panel-title\"><span class=\"text1\">3</span>Beginner\'s Module</h3>
      <div class=\"panel-content\">
       <ul class=\"sectionlist\" style=\"padding-left:10px;\">
						<li><span>Getting Started</span></li>
						<li><span>Introduction to AdWords</span></li>
						<li><span>Account Management</span></li>
						<li><span>Campaign and Ad Group Management</span></li>
						<li><span>A Quick Quiz</span></li>
						<li><span>Keyword Targeting</span></li>
				  
				  </ul>
      </div>
		  
	 
	  
  </div>', 'images (5).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('7', 'Superintendent\'s Report', '10', '9', '341232', '10', '2 Years', 'Class Room', '0', '<p>qweqwe qeq</p>
', '<ul>
	<li>
	<h3>Fundamentals Of SEM</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Flexibility In Learning</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Display Campaigns Using Google AdWords</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Industry Recognized Certificate</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Practice Quizzes And MCQs</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Job Opportunities</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
</ul>
', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'women.jpg', '19-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('8', 'BBA', '3', '1', '50000', '3 Years', '10 + 2 Pass', 'Class Room', '1', '<p>BBA</p>
', '<ul>
	<li>
	<h3>Fundamentals Of SEM</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Flexibility In Learning</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Display Campaigns Using Google AdWords</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Industry Recognized Certificate</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Practice Quizzes And MCQs</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
	<li>
	<h3>Job Opportunities</h3>

	<p>Master the fundamentals of Search Engine Marketing, Web Analytics, Mobile Marketing and more</p>
	</li>
</ul>
', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'images (6).jpg', '23-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('9', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('10', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('11', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('12', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('13', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('14', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('15', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '<p>Our brochures are printed full color on both sides, you can choose your folding option for your best needs, good for a mailing or to hand out at your next trade show or business event.</p>
', '', '<ul>
	<li>32 hours of Instructor-led Training</li>
	<li>29 hours of High Quality E-Learning content</li>
	<li>137 End-of-Chapter Quizzes &amp; 2 Simulation Exams each</li>
	<li>3 Industry Case studies and 20 Real world industry examples</li>
	<li>PRINCE2&reg; Foundation and Practitioner Exam Fee Included</li>
	<li>98.6% Pass rate</li>
</ul>
', '<div class=\"accordion1\">
<h3>1Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>2Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>

<h3>3Beginner&#39;s Module</h3>

<div class=\"panel-content\">
<ul>
	<li>Getting Started</li>
	<li>Introduction to AdWords</li>
	<li>Account Management</li>
	<li>Campaign and Ad Group Management</li>
	<li>A Quick Quiz</li>
	<li>Keyword Targeting</li>
</ul>
</div>
</div>
', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('16', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('17', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('18', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('19', 'BAC', '2', '1', '9666', '2 Years', '10 + 2 Pass', 'Class Room', '0', '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('20', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('21', 'C++', '4', '15', '3443', '6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (4).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('22', 'PHP', '4', '1', '3000', '1 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (5).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('23', 'BBA', '8', '1', '50000', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('24', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('25', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('26', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('27', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('28', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('29', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('30', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('31', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('32', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('33', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('34', 'BAC', '2', '1', '9666', '2 Years', '10 + 2 Pass', 'Class Room', '0', '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('35', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('36', 'C++', '4', '15', '3443', '6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (4).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('37', 'PHP', '4', '1', '3000', '1 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (5).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('38', 'BBA', '8', '1', '50000', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('39', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('40', 'M.COM', '11', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('41', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('42', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('43', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('44', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('45', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('46', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('47', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('48', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('49', 'BAC', '2', '1', '9666', '2 Years', '10 + 2 Pass', 'Class Room', '0', '', '', '', '', 'images (6).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('50', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('51', 'C++', '4', '15', '3443', '6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (4).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('52', 'PHP', '4', '1', '3000', '1 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (5).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('53', 'BBA', '8', '1', '50000', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (6).jpg', '23-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('54', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('55', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('56', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('57', 'M.COM', '11', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('58', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('59', 'M.COM', '2', '1', '96600', '3 Years', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'download.jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('60', 'MCA', '3', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', 'images (8).jpg', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('61', 'MCA', '4,11,5,3,10,12,6,2', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('62', 'MCA', '11', '1', '56000', '3 Years 6 Months', '10 + 2 Pass', 'Class Room', '1', '', '', '', '', '', '07-03-2016', 'Active');
insert into tbl_courses (fld_id, fld_name, fld_catid, fld_universityid, fld_fee, fld_duration, fld_eligibility_criteria, fld_modeofdelhivery, fld_featured, fld_coursehighlight, fld_benifits, fld_eligibilityinfo, fld_curriculum, fld_uploadfile, fld_addedon, fld_status) values ('63', 'test courser', '4,5,3,10,12,6,2', '1', '111', '11', '1111', 'Class Room', '1', '<p>11111</p>
', '<p>111</p>
', '<p>111</p>
', '<p>111</p>
', 'PGD sales _ Brochure.docx', '26-04-2016', 'Active');
