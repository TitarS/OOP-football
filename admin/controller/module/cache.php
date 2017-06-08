<?php
class ControllerModulecache extends Controller {
    private $error = array();
    public function pathindexphp() {
        $path=dirname(DIR_APPLICATION) .'/' . 'index.php';
        return $path; 
    }
    public function index() {
        $data = $this->language->load('module/cache');
        require_once(DIR_SYSTEM . 'library/cache.php');
        $pagecache = new Cache();
        $vals=$pagecache->Settings();
        foreach (array_keys($vals) as $key) {
            if ($vals[$key] === true) {
                $vals[$key]='true';
            }
            if ($vals[$key] === false) {
                $vals[$key]='false';
            }
            $data[$key]=$vals[$key];
        }
        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home', 
                'token=' . $this->session->data['token'], 'SSL'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->url->link('extension/module', 
                'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link('module/cache', 
                'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );
        $data['heading_title'] = $this->language->get('heading_title');
        $data['token'] = $this->session->data['token'];
        $this->template = 'module/cache.tpl';
        $this->children = array(
            'common/header',
            'common/footer'
        );
        $data['compatstatus']=$this->compatstatus();
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $data['cancel'] = $this->url->link('extension/module', 
            'token=' . $this->session->data['token'], 'SSL'
        );
	}
}
//more class

?>
