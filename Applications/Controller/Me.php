<?php 
	class Me Extends Controller{
            function Index(){
                $cat=$this->load->model('Category');
                $cat->get();
                
            }
            
            function test(){
                $news=  $this->load->model('category');
                $news->get();
            }
	}