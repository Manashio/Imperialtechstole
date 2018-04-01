
<?php
/////////////////////////////////////////////////////////// For Pagging        

 global $offset; 
 function getPagingQuery($sql, $itemPerPage )
{
	global $offset;
	
	if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;
	
	return $sql . " LIMIT $offset, $itemPerPage";
}
 
 function getPagingLink($sql, $itemPerPage , $strGet ='',$search_key)
{   
    
	global $db;
	$result        = mysql_query($sql);
	$pagingLink    = '';
	$totalResults  =mysql_num_rows($result);
	$totalPages    = ceil($totalResults / $itemPerPage);
	$ID =isset ($_REQUEST['id']);
	// how many link pages to show
	$numLinks      = $itemPerPage;

		//echo $totalPages; exit;
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
	
		$self = 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		$page_name=basename($_SERVER['PHP_SELF']);
         //if($page_name=='product.php')
         //{
		 if(isset($_REQUEST['profile_id'])!="")
		 {
		 	$self=$HTTP_PATH.$page_name."?profile_id=".$_REQUEST['profile_id'];
		 }//elseif($_REQUEST['cate_id']!="" && $_REQUEST['sub_cate_id']=="")
		 //{
		 //	$self=$HTTP_PATH.$page_name."?cate_id=".$_REQUEST['cate_id'];
		 //}
          // $self=$HTTP_PATH.$page_name."?action=".$_REQUEST['action']."";
			//$self=$_SERVER['REQUEST_URI'];
          //}
		
		if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$pageNumber = (int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1)
             {
				$prev = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$page&id=$ID'>Prev</a>";
			} else 
              {
				$prev = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$page&id=$ID'>Prev</a>";
			}	
				
			$first = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=1&id=$ID'>First</a>";
		} //else //{
			//$prev  = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$page&id=$ID'>Prev</a> "; // we're on page one, don't show 'previous' link
			//$first = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=1&id=$ID'>First</a>"; // nor 'first page' link
		//}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$page&id=$ID'>Next</a>";
			$last = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$totalPages&id=$ID'>Last</a>";
		} else {
			$next = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$page&id=$ID'>Next</a> "; // we're on the last page, don't show 'next' link
			$last = "<a class='pre_next' style=color:black; href='$self?pgnm=subjects&page=$totalPages&id=$ID'>Last</a> "; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				$pagingLink[] = " $page ";   // no need to create a link to current page
			} else {
				if ($page ==1) {
					$pagingLink[] = "<a class='no_link' style=color:red; href='$self?pgnm=subjects&search_key=$search_key&id=$ID'>$page</a>";
				} else {	
					$pagingLink[] = "<a class='no_link' style=color:red; href='$self?pgnm=subjects&page=$page&id=$ID'>$page</a>";
				}	
			}
	
		}
		
		$pagingLink = implode('   ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first .'&nbsp;&nbsp;&nbsp;'. $prev .'&nbsp;&nbsp;'. $pagingLink .'&nbsp;&nbsp;'. $next .'&nbsp;&nbsp;&nbsp;'. $last;
	}
	
	return $pagingLink;
}


  ?>