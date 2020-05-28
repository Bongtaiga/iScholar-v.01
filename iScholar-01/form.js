$(document).ready(function(){
	console.log('abc')
   	var nowPage = 1;
   	$('.next-btn').click(function(){ // an nut next
   	var prev_page = '.page-'+nowPage;
   	nowPage++;
   	var page = '.page-'+nowPage;
   	console.log(prev_page);
   	console.log(page);
   	$(page).addClass('show');
   	$(prev_page).removeClass('show');
   	});
   	$('.prev-btn').click(function(){// an nut prev
   	var next_page = '.page-'+nowPage;
   	nowPage--;   
   	var page = '.page-'+nowPage;
   	$(page).addClass('show');
   	$(next_page).removeClass('show');
   	   	console.log(next_page);
   	console.log(page);
   	});
   	$('.prev-btn-3').click(function(){// an nut prev
   	var next_page = '.page-'+nowPage;
   	nowPage--;   
   	var page = '.page-'+nowPage;
   	$(page).addClass('show');
   	$(next_page).removeClass('show');
   	   	console.log(next_page);
   	console.log(page);
   	});
 });