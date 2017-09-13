<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    private $logoController;
    private $menuController;
    private $bannerController;
    private $bannerChildController;
    private $introController;
    private $postCategoryController;
    private $reviewController;
    private $questionController;
    private $footerController;
    private $postController;
    public function __construct(LogoController $logoController,
                                MenuController $menuController,
                                BannerController $bannerController,
                                BannerChildController $bannerChildController,
                                IntroController $introController,
                                PostCategoryController $postCategoryController,
                                ReviewController $reviewController,
                                QuestionController $questionController,
                                FooterController $footerController,
                                PostController $postController)
    {
        $this->logoController = $logoController;
        $this->menuController = $menuController;
        $this->bannerController = $bannerController;
        $this->bannerChildController = $bannerChildController;
        $this->introController = $introController;
        $this->postCategoryController = $postCategoryController;
        $this->reviewController = $reviewController;
        $this->questionController = $questionController;
        $this->footerController = $footerController;
        $this->postController = $postController;
    }

    public function index(){
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $banner = $this->bannerController->getBanner();
        $banner_child = $this->bannerChildController->getBannerChild();
        $intro = $this->introController->getIntro();
        $post_categorys = $this->postCategoryController->getAllCategory();
        $reviews = $this->reviewController->getAllReview();
        $questions  = $this->questionController->getAllQuestion();
        $footer = $this->footerController->getFooterAdmin();
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['banner'] = $banner;
        $data['banner_child'] = $banner_child;
        $data['intro'] = $intro;
        $data['post_categorys'] = $post_categorys;
        $data['reviews'] = $reviews;
        $data['questions'] = $questions;
        $data['footer'] = $footer;
        return view('layouts.master',$data);
    }

    public function post($post_category){
        $logo = $this->logoController->getLogo();
        $menus = $this->menuController->getAllMenu();
        $footer = $this->footerController->getFooter();
        $post = $this->postCategoryController->getCategoryId($post_category);
        $data['footer'] = $footer;
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['post'] = $post;
        return view('layouts.master',$data);
    }

    public function post_detail($category,$title){
        $id = array_first(explode('.',array_last(explode('-',$title))));
        $post = $this->postCategoryController->getCategoryId($category);
        $post_detail = $this->postController->getPostDetail($id);
        $logo = $this->logoController->getLogo();
        $menus = $this->menuController->getAllMenu();
        $footer = $this->footerController->getFooter();
        $data['post_detail'] = $post_detail;
        $data['footer'] = $footer;
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['post'] = $post;
        $data['id'] = $id;
        return view('layouts.master',$data);
    }
}
