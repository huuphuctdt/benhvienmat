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
    private $promotionController;
    public function __construct(LogoController $logoController,
                                MenuController $menuController,
                                BannerController $bannerController,
                                BannerChildController $bannerChildController,
                                IntroController $introController,
                                PostCategoryController $postCategoryController,
                                ReviewController $reviewController,
                                QuestionController $questionController,
                                FooterController $footerController,
                                PostController $postController,
                                PromotionController $promotionController)
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
        $this->promotionController = $promotionController;
    }

    public function index(){
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $banner = $this->bannerController->getBannerAdmin();
        $banner_child = $this->bannerChildController->getBannerChild();
        $intro = $this->introController->getIntroAdmin();
        $post_categorys = $this->postCategoryController->getAllCategoryAdmin();
        $reviews = $this->reviewController->getAllReviewAdmin();
        $questions  = $this->questionController->getAllQuestionAdmin();
        $footer = $this->footerController->getFooterAdmin();
        $promotion = $this->promotionController->getPromotionAdmin();
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['banner'] = $banner;
        $data['banner_child'] = $banner_child;
        $data['intro'] = $intro;
        $data['post_categorys'] = $post_categorys;
        $data['reviews'] = $reviews;
        $data['questions'] = $questions;
        $data['footer'] = $footer;
        $data['promotion'] = $promotion;
        return view('layouts.master',$data);
    }

    public function post($post_category){
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $footer = $this->footerController->getFooterAdmin();
        $promotion = $this->promotionController->getPromotionAdmin();
        $post = $this->postCategoryController->getCategoryId($post_category);
        $data['footer'] = $footer;
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['post'] = $post;
        $data['promotion'] = $promotion;
        $data['banner'] = null;
        $data['intro'] = null;
        $data['post_categorys'] = null;
        $data['reviews'] = null;
        $data['questions'] = null;
        if($post == null){
            return redirect('/errors/404');
        }
        return view('layouts.master',$data);
    }

    public function post_detail($category,$title){
        $id = array_first(explode('.',array_last(explode('-',$title))));
        $post = $this->postCategoryController->getCategoryId($category);
        $post_detail = $this->postController->getPostDetail($id);
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $footer = $this->footerController->getFooterAdmin();
        $promotion = $this->promotionController->getPromotionAdmin();
        $data['post_detail'] = $post_detail;
        $data['footer'] = $footer;
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['post'] = $post;
        $data['id'] = $id;
        $data['promotion'] = $promotion;
        $data['banner'] = null;
        $data['intro'] = null;
        $data['post_categorys'] = null;
        $data['reviews'] = null;
        $data['questions'] = null;
        return view('layouts.master',$data);
    }

    public function search(Request $request){
        $keyword = $request->s;
        $post_search = $this->postController->getPostSearch($keyword);
        $post_categorys = $this->postCategoryController->getAllCategoryAdmin();
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $footer = $this->footerController->getFooterAdmin();
        $promotion = $this->promotionController->getPromotionAdmin();
        $data['post_search'] = $post_search;
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['footer'] = $footer;
        $data['promotion'] = $promotion;
        $data['post_categorys'] = $post_categorys;
        $data['banner'] = null;
        $data['intro'] = null;
        $data['reviews'] = null;
        $data['questions'] = null;
        return view('layouts.master',$data);
    }

    public function display_error(){
        $logo = $this->logoController->getLogoAdmin();
        $menus = $this->menuController->getAllMenuAdmin();
        $banner = $this->bannerController->getBannerAdmin();
        $banner_child = $this->bannerChildController->getBannerChild();
        $intro = $this->introController->getIntroAdmin();
        $post_categorys = $this->postCategoryController->getAllCategoryAdmin();
        $reviews = $this->reviewController->getAllReviewAdmin();
        $questions  = $this->questionController->getAllQuestionAdmin();
        $footer = $this->footerController->getFooterAdmin();
        $promotion = $this->promotionController->getPromotionAdmin();
        $data['logo'] = $logo;
        $data['menus'] = $menus;
        $data['banner'] = '';
        $data['banner_child'] = '';
        $data['intro'] = '';
        $data['post_categorys'] = '';
        $data['reviews'] = '';
        $data['questions'] = '';
        $data['footer'] = $footer;
        $data['promotion'] = '';
        return view('errors.404',$data);
    }
}
