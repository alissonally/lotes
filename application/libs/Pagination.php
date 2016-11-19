<?php

class Pagination
{
    /**
     * Total records available in the table
     * @var int
     */
    private $total;

    /**
     * Records to return per set (or page)
     * @var int
     */
    private $perSet;

    /**
     * Number of the current set (1+) (or page)
     * @var int
     */
    private $pg;

    /**
     * GET se houver necessidade
     */
    private $params;

    /**
     * Sets available based on total and perSet
     * @var int
     */
    private $sets;

    private $controller;

    private $self_url;
    private $get_params='';
    /**
     * Constructor
     * @param   int $paged  Current set number (or page)
     * @param   int $perSet Number of records to return per set
     * @param   int $total  Total records in table
     */
     public function __construct($controller, $current_page, $perSet, $total, $params='') {
        $this->set_params();
        $this->controller = $controller;
        $this->page = base_url($this->controller);
        $this->self_url = base_url($this->controller .'/pg/'); 
        $this->perSet = (int) $perSet;
        $this->total = (int) $total;
        $this->sets = (int) ceil($this->total / $perSet);        
        $this->pg = $current_page;
        $this->params = $params . $this->get_params;  
    }


    public function paginacao($range = 2) {
         $pagination ='';
         $showitems = ($range * 1)+1;  
         $current = $this->pg;
         if(!$this->sets)
         {
             $this->sets = 1;
         }
         if(1 != $this->sets){
         
             $pagination = "<div class='row darkBg'>";  
             $pagination .= "<ul class='span10 offset2 clearfix pagination'>";             
             
            if($this->pg > 1 && $current ==2) {
                $pagination .= "<li class='arrowLeft'><a href='".$this->page .$this->params."'>&#8592</a></li>";
            }
            else{
             if($this->pg > 1 )  
                $pagination .= "<li class='arrowLeft'><a href='".$this->self_url . --$current .$this->params."'>&#8592</a></li>";
            }
             if($this->pg > 10 )
                $pagination .= "<li class='arrowLeft'><a href='".$this->page .$this->params."'>1...</a></li>";

             for ($i=1; $i <= $this->sets; $i++){
                 
                if($i === 1){
                    $class_color = ($this->pg == $i) ? 'class="active"':'';
                    $pagination .=  "<li ".$class_color."><a href='".$this->page.$this->params."' ".$class_color." >".$i."</a></li>";
                } else {

                    if (1 != $this->sets &&( !($i >= $this->pg+$range+1 || $i <= $this->pg-$range-1) || $this->sets <= $showitems )) {
                        $pagination .= ($this->pg == $i) ? "<li class='active'><a href='".$this->self_url . $this->pg.$this->params."' class='colored'>".$i."</a></li>": "<li><a href='".$this->self_url. $i .$this->params."'>".$i."</a></li>";
                    }
                } 
             }
             if($this->pg != $this->sets && $this->pg  < ($this->sets - 1))
                $pagination .= "<li><a href='".$this->self_url . $this->sets.$this->params."'>...".$this->sets ."</a></li>";
             if($this->pg != $this->sets )
                $pagination .= "<li class='arrowRight'><a href='".$this->self_url . ($this->pg + 1) .$this->params."'>&#8594;</a> </li>";
              
              $pagination .= "</ul>\n";
              $pagination .= "</div>\n";  

            }
            
             
        return $pagination;
    }


    /**
     * seta os parametros $_GET na paginação
     * @return string ?param=valua&=param_2=valua2
     */
    public function set_params(){
        
        foreach ($_GET as $key => $value) {
            if($key !='url'){
                $this->get_params .= $key .'='.$value.'&';
            }
        }
        if(!empty($this->get_params)){
            $this->get_params = '?'.rtrim($this->get_params, '&');
            return $this->get_params;
        }
    }
}