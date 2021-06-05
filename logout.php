
                                    <?php
                                    
                                     if (isset ($_SESSION ['logout']))
                                      {
	                                     destroySession ();
	                                      header("location: index.php");
	
                                    }
                                 ?>