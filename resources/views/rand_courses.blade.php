<div class="container-fluid myCourse-cat">
    <div class="container">
    	
		<div id="" class="carousel slide" data-ride="">
                      <div class="carousel-inner" role="listbox">
                          <?php 
                          $y = sizeof($data);
                          $y = bcdiv($y,4,1);
                          if($y >= 2){
                              $y = $y;
                          }else{
                              $y = $y > 1 ? 2 : 1;
                          }
                          for($i=0; $i <= $y; $i++):
                              ?>
                        <div class="item <?= $i == 0 ? 'active':'tunji'; ?>">
                            <?php $x = 0; foreach($data as $cat): ?>
                            
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="catimgeffect">
                                    <img src="{{$cat->avatar}}" alt="" class="img-responsive" />
                                    <div class="overlay">
                                       <h2>{{$cat->name}}</h2>
                                       <a class="info" href="{{asset('courses/'.$cat->id.'/'.$cat->name)}}">View Category</a>
                                    </div>
                                </div>
                            </div>
                            
                            <?php $x++; if($x > 3){break;} endforeach; ?>
                        </div>
                          <?php endfor; ?>
                        
                      </div>
                      <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>-->
                    </div>
    </div>
</div>