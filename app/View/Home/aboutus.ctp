<?php //echo $data['Staticpage']['description']; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="child_a">
			<img id="blah" src="<?php echo $this->webroot. 'image/staticpage_pic/'.$data['Staticpage']['image']; ?>" alt="your image" style="height: 20%;
    width: 65%;" />
			</div>
		</div>

		<div class="col-sm-8">
			<div class="child_b">
				<?php echo $data['Staticpage']['description']; ?>
			</div>			
		</div>

	</div>
</div>

<style>
.child_a img {
    width: 100%;
    float: left;
    margin-top: 25px;
}
.child_b {
    width: 100%;
    float: left;
    margin-top: 70px;
}

.child_b h3{
	font-family: DauphinPlain;
	font-weight: 400;
    line-height: 24px;
    font-family: DauphinPlain;
    font-size: 24px;
}

</style>