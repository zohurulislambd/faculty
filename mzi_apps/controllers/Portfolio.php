<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 3/7/2018
 * Time: 10:41 AM
 * @property Logo_model  mLogo
 * @property Banner_model  mBanner
 * @property About_model mAbout
 * @property Bio_model  mBio
 * @property Service_model  mService
 * @property Contact_model mContact
 * @property Research_model  mResearch
 *@property Teaching_model mTeaching
 * @property  Publication_model mPublication*
 * @property  Gallery_model mGallery
 */

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Logo_model","mLogo");
        $this->load->model("Banner_model","mBanner");
        $this->load->model("About_model", "mAbout");
        $this->load->model("Bio_model","mBio");
        $this->load->model("Research_model","mResearch");
        $this->load->model("Teaching_model","mTeaching");
        $this->load->model("Publication_model","mPublication");
        $this->load->model("Gallery_model","mGallery");
        $this->load->model('Service_model','mService');
        $this->load->model('Contact_model','mContact');
    }

    /**
     *
     */
    public function index(){
        $data = array(
        'post' =>$this->mLogo->get_logo(),
        'all_banner_article' =>$this->mBanner->get_bnr_cont(),
        'about_content' =>$this->mAbout->get_about_cont(),
        'skill_cont' =>$this->mAbout->get_skill(),
        'education' =>$this->mBio->get_bio(),
        'employment' =>$this->mBio->get_employment(),
        'awards' =>$this->mBio->get_award(),
        'research' =>$this->mResearch->get_all_research_project(),
        'teaching' =>$this->mTeaching->get_teaching(),
        'history_teaching' =>$this->mTeaching->get_teaching_history(),
        'interest' =>$this->mResearch->get_all_interest(),
        'publication' =>$this->mPublication->get_publication(),
        'gallery' => $this->mGallery->get_gallery(),
        'social_icon'=> $this->mBanner->get_socail_media_all(),
        'service_part'=> $this->mService->get_services(),
        'address'=> $this->mContact->get_cont_add()
    );

    $this->load->view('fontend/common/header',$data);
    $this->load->view('fontend/main',$data);
    $this->load->view('fontend/common/footer');
    }


}