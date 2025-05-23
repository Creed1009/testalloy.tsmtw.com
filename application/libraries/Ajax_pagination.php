<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pagination Class
 *
 * @package   CodeIgniter
 * @link      http://codeigniter.com/user_guide/libraries/pagination.html
 *
 * Modified by CodexWorld.com
 * @Ajax pagination functionality has added with this library.
 * @It will helps to integrate Ajax pagination with loading image in CodeIgniter application.
 * @TutorialLink http://www.codexworld.com/ajax-pagination-in-codeigniter-framework/
 */
class Ajax_pagination{

    var $base_url        = '';
    var $total_rows      = '';
    var $per_page        = 10;
    var $num_links       =  2;
    var $cur_page        =  0;
    var $first_link      = '<span class="glyphicon glyphicon-step-backward"></span>';
    var $next_link       = '<span aria-hidden="true">&raquo;</span>';
    var $prev_link       = '<span aria-hidden="true">&laquo;</span>';
    var $last_link       = '<span class="glyphicon glyphicon-step-forward"></span>';
    var $uri_segment     = 3;
    var $full_tag_open   = '<ul class="pagination justify-content-center">';
    var $full_tag_close  = '</ul>';
    var $first_tag_open  = '<li class="page-item">';
    var $first_tag_close = '</li>';
    var $last_tag_open   = '<li class="page-item">';
    var $last_tag_close  = '</li>';
    var $cur_tag_open    = '<li class="page-item active"><a href="#" class="page-link">';
    var $cur_tag_close   = '</a></li>';
    var $next_tag_open   = '<li class="page-item">';
    var $next_tag_close  = '</li>';
    var $prev_tag_open   = '<li class="page-item">';
    var $prev_tag_close  = '</li>';
    var $num_tag_open    = '<li class="page-item">';
    var $num_tag_close   = '</li>';
    var $target          = '';
    var $anchor_class    = '';
    var $show_count      = false;
    var $link_func       = 'getData';
    var $loading         = '.loading';

    /**
     * Constructor
     * @access    public
     * @param    array    initialization parameters
     */
    function CI_Pagination($params = array()){
        if (count($params) > 0){
            $this->initialize($params);
        }
        log_message('debug', "Pagination Class Initialized");
    }

    /**
     * Initialize Preferences
     * @access    public
     * @param    array    initialization parameters
     * @return    void
     */
    function initialize($params = array()){
        if (count($params) > 0){
            foreach ($params as $key => $val){
                if (isset($this->$key)){
                    $this->$key = $val;
                }
            }
        }

        // Apply class tag using anchor_class variable, if set.
        if ($this->anchor_class != ''){
            $this->anchor_class = 'class="' . $this->anchor_class . '" ';
        }
    }

    /**
     * Generate the pagination links
     * @access    public
     * @return    string
     */
    function create_links(){
        // If our item count or per-page total is zero there is no need to continue.
        if ($this->total_rows == 0 OR $this->per_page == 0){
           return '';
        }

        // Calculate the total number of pages
        $num_pages = ceil($this->total_rows / $this->per_page);

        // Is there only one page? Hm... nothing more to do here then.
        if ($num_pages == 1){
            $info = '<p style="padding:5px; margin: 0px; text-align:right;">顯示:  ' . $this->total_rows.' 筆</p>';
            return $info;
        }

        // Determine the current page number.
        $CI =& get_instance();
        if ($CI->uri->segment($this->uri_segment) != 0){
            $this->cur_page = $CI->uri->segment($this->uri_segment);
            // Prep the current page - no funny business!
            $this->cur_page = (int) $this->cur_page;
        }

        $this->num_links = (int)$this->num_links;
        if ($this->num_links < 1){
            show_error('Your number of links must be a positive number.');
        }

        if ( ! is_numeric($this->cur_page)){
            $this->cur_page = 0;
        }

        // Is the page number beyond the result range?
        // If so we show the last page
        if ($this->cur_page > $this->total_rows){
            $this->cur_page = ($num_pages - 1) * $this->per_page;
        }

        $uri_page_number = $this->cur_page;
        $this->cur_page = floor(($this->cur_page/$this->per_page) + 1);

        // Calculate the start and end numbers. These determine
        // which number to start and end the digit links with
        $start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
        $end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

        // Add a trailing slash to the base URL if needed
        $this->base_url = rtrim($this->base_url, '/') .'/';

        // And here we go...
        $output = '';

        // SHOWING LINKS
        if ($this->show_count){
            $curr_offset = (int)$CI->uri->segment($this->uri_segment);
            $info = '  <li style="line-height:32px; padding-right: 10px; float: left;"> ' . ( $curr_offset + 1 ) . ' - ' ;

            if( ( $curr_offset + $this->per_page ) < ( $this->total_rows -1 ) )
            $info .= $curr_offset + $this->per_page;
            else
            $info .= $this->total_rows;

            $info .= ' / ' . $this->total_rows . ' </li>';
            $output .= $info;
        }

        // Render the "First" link
        // if  ($this->cur_page > $this->num_links){
        //     $output .= $this->first_tag_open
        //             . $this->getAJAXlink( '' , $this->first_link)
        //             . $this->first_tag_close;
        // }

        // Render the "previous" link
        if  ($this->cur_page != 1){
            $i = $uri_page_number - $this->per_page;
            if ($i == 0) $i = '';
            $output .= $this->prev_tag_open
                    . $this->getAJAXlink( $i, $this->prev_link )
                    . $this->prev_tag_close;
        }

        // Write the digit links
        for ($loop = $start -1; $loop <= $end; $loop++){
            $i = ($loop * $this->per_page) - $this->per_page;
            if ($i >= 0){
                if ($this->cur_page == $loop){
                    $output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
                } else {
                    $n = ($i == 0) ? '' : $i;
                    $output .= $this->num_tag_open
                        . $this->getAJAXlink( $n, $loop )
                        . $this->num_tag_close;
                }
            }
        }

        // Render the "next" link
        if ($this->cur_page < $num_pages){
            $output .= $this->next_tag_open
                . $this->getAJAXlink( $this->cur_page * $this->per_page , $this->next_link )
                . $this->next_tag_close;
        }

        // Render the "Last" link
        // if (($this->cur_page + $this->num_links) < $num_pages){
        //     $i = (($num_pages * $this->per_page) - $this->per_page);
        //     $output .= $this->last_tag_open . $this->getAJAXlink( $i, $this->last_link ) . $this->last_tag_close;
        // }

        // Kill double slashes.  Note: Sometimes we can end up with a double slash
        // in the penultimate link so we'll kill all double slashes.
        $output = preg_replace("#([^:])//+#", "\\1/", $output);

        // Add the wrapper HTML if exists
        $output = $this->full_tag_open.$output.$this->full_tag_close;
        ?>
        <script>
        function getData(page){
            $.ajax({
                method: "POST",
                url: "<?php echo $this->base_url; ?>"+page,
                data: { page: page },
                beforeSend: function(){
                    $('<?php echo $this->loading; ?>').show();
                },
                success: function(data){
                    $('<?php echo $this->loading; ?>').hide();
                    $('<?php echo $this->target; ?>').html(data);
                }
            });
        }
        </script>
        <?php
        return $output;
    }

    function getAJAXlink($count, $text) {
        $pageCount = $count?$count:0;
        return '<a class="page-link" href="javascript:void(0);"' . $this->anchor_class . ' onclick="'.$this->link_func.'('.$pageCount.')">'. $text .'</a>';
    }
}