<?php
	$this->load->view('page/header');
?>
		<div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url() ?>homepage">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li class="active"><a href="contact.html">CONTACT</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	 <div id="contactwrap"></div>
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Call Center</h4>
	 			<div class="hline"></div>
		 			<p>Silahkan kirimikan pesan jika ada pertanyaan atau masukan.</p>
		 			<form role="form">
					  <div class="form-group">
					    <label for="InputName1">Your Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					    <label for="InputSubject1">Subject</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					  	<label for="message1">Message</label>
					  	<textarea class="form-control" id="message1" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme">Submit</button>
					</form>
			</div><! --/col-lg-8 -->
	 		
	 		<div class="col-lg-4">
		 		<h4>Alamat</h4>
		 		<div class="hline"></div>
		 			<p>
		 				Jalan Ahmad Yani No. 100<br/>
		 				Banyuwangi<br/>
		 			</p>
		 			<p>
		 				Email: bappeda@banyuwangi.com<br/>
		 				Telp: (0333) 413230 <br/>
		 				Fax: (0333) 428992 <br/>
		 			</p>
		 			<p>Silahkan memasukkan pesan keluhan atau pertanyaan dengan bijak dan kata-kata yang baik. Kata-kata yang berupa spam, kata-kata kotor, dan link tidak bermanfaat akan segera kami hapus.</p>
	 		</div>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->


<?php
	$this->load->view('page/footer');
?>
