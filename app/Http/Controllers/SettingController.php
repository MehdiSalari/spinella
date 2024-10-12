<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use Session;

class SettingController extends Controller
{
    public function index()
    {
        return redirect('admin/settings/home');
    }

    public function home()
    {
        return view('admin.settings.home');
    }

    public function blog()
    {
        return view('admin.settings.blog');
    }

    public function about()
    {
        return view('admin.settings.about-us');
    }

    public function contact()
    {
        return view('admin.settings.contact-us');
    }

    public function products()
    {
        return view('admin.settings.product');
    }

    public function update(Request $request, $page, $lang)
    {
        $filePath = base_path("lang/$lang/$page.php");
        
        if (!file_exists($filePath)) {
            abort(404);
        }

        switch ($page) {
            case 'home':
                if ($request->hasFile('sliderImg1')) {
                    $sliderImg1 = $request->file('sliderImg1');
                    $sliderImg1Name = 'slide-1.' . $sliderImg1->getClientOriginalExtension();
                    $sliderImg1->move(public_path('assets/images/slider'), $sliderImg1Name);
                }

                if ($request->hasFile('sliderImg2')) {
                    $sliderImg2 = $request->file('sliderImg2');
                    $sliderImg2Name = 'slide-2.' . $sliderImg2->getClientOriginalExtension();
                    $sliderImg2->move(public_path('assets/images/slider'), $sliderImg2Name);
                }

                if ($request->hasFile('sliderImg3')) {
                    $sliderImg3 = $request->file('sliderImg3');
                    $sliderImg3Name = 'slide-3.' . $sliderImg3->getClientOriginalExtension();
                    $sliderImg3->move(public_path('assets/images/slider'), $sliderImg3Name);
                }

                if ($request->hasFile('interviewImg')) {
                    $interviewImg = $request->file('interviewImg');
                    $interviewImgName = 'bg-1.' . $interviewImg->getClientOriginalExtension();
                    $interviewImg->move(public_path('assets/images/background'), $interviewImgName);
                }

                if ($request->hasFile('bannerImg1')) {
                    $bannerImg1 = $request->file('bannerImg1');
                    $bannerImg1Name = 'bg-2.' . $bannerImg1->getClientOriginalExtension();
                    $bannerImg1->move(public_path('assets/images/background'), $bannerImg1Name);
                }

                if ($request->hasFile('bannerImg2')) {
                    $bannerImg2 = $request->file('bannerImg2');
                    $bannerImg2Name = 'bg-4.' . $bannerImg2->getClientOriginalExtension();
                    $bannerImg2->move(public_path('assets/images/background'), $bannerImg2Name);
                }

                if ($request->hasFile('productImg')) {
                    $productImg = $request->file('productImg');
                    $productImgName = 'bg-3.' . $productImg->getClientOriginalExtension();
                    $productImg->move(public_path('assets/images/background'), $productImgName);
                }

                if ($request->hasFile('productImg1')) {
                    $productImg1 = $request->file('productImg1');
                    $productImg1Name = 'p1.' . $productImg1->getClientOriginalExtension();
                    $productImg1->move(public_path('assets/images/misc'), $productImg1Name);
                }

                if ($request->hasFile('productImg2')) {
                    $productImg2 = $request->file('productImg2');
                    $productImg2Name = 'p2.' . $productImg2->getClientOriginalExtension();
                    $productImg2->move(public_path('assets/images/misc'), $productImg2Name);
                }

                if ($request->hasFile('productImg3')) {
                    $productImg3 = $request->file('productImg3');
                    $productImg3Name = 'p3.' . $productImg3->getClientOriginalExtension();
                    $productImg3->move(public_path('assets/images/misc'), $productImg3Name);
                }

                if ($request->hasFile('productImg4')) {
                    $productImg4 = $request->file('productImg4');
                    $productImg4Name = 'p4.' . $productImg4->getClientOriginalExtension();
                    $productImg4->move(public_path('assets/images/misc'), $productImg4Name);
                }

                if ($request->hasFile('productImg5')) {
                    $productImg5 = $request->file('productImg5');
                    $productImg5Name = 'p5.' . $productImg5->getClientOriginalExtension();
                    $productImg5->move(public_path('assets/images/misc'), $productImg5Name);
                }

                if ($request->hasFile('descImg')) {
                    $descImg = $request->file('descImg');
                    $descImgName = 'bg-5.' . $descImg->getClientOriginalExtension();
                    $descImg->move(public_path('assets/images/background'), $descImgName);
                }

                if ($request->hasFile('galleryImg1')) {
                    $galleryImg1 = $request->file('galleryImg1');
                    $galleryImg1Name = 'pf1.' . $galleryImg1->getClientOriginalExtension();
                    $galleryImg1->move(public_path('assets/images/menu/view'), $galleryImg1Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg1Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg1Name"));
                }

                if ($request->hasFile('galleryImg2')) {
                    $galleryImg2 = $request->file('galleryImg2');
                    $galleryImg2Name = 'pf2.' . $galleryImg2->getClientOriginalExtension();
                    $galleryImg2->move(public_path('assets/images/menu/view'), $galleryImg2Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg2Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg2Name"));
                }

                if ($request->hasFile('galleryImg3')) {
                    $galleryImg3 = $request->file('galleryImg3');
                    $galleryImg3Name = 'pf3.' . $galleryImg3->getClientOriginalExtension();
                    $galleryImg3->move(public_path('assets/images/menu/view'), $galleryImg3Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg3Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg3Name"));
                }

                if ($request->hasFile('galleryImg4')) {
                    $galleryImg4 = $request->file('galleryImg4');
                    $galleryImg4Name = 'pf4.' . $galleryImg4->getClientOriginalExtension();
                    $galleryImg4->move(public_path('assets/images/menu/view'), $galleryImg4Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg4Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg4Name"));
                }

                if ($request->hasFile('galleryImg5')) {
                    $galleryImg5 = $request->file('galleryImg5');
                    $galleryImg5Name = 'pf5.' . $galleryImg5->getClientOriginalExtension();
                    $galleryImg5->move(public_path('assets/images/menu/view'), $galleryImg5Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg5Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg5Name"));
                }

                if ($request->hasFile('galleryImg6')) {
                    $galleryImg6 = $request->file('galleryImg6');
                    $galleryImg6Name = 'pf6.' . $galleryImg6->getClientOriginalExtension();
                    $galleryImg6->move(public_path('assets/images/menu/view'), $galleryImg6Name);
                    $image = Image::read(public_path("assets/images/menu/view/$galleryImg6Name"));
                    $image->resize(800,800)->save(public_path("assets/images/menu/$galleryImg6Name"));
                }

                if ($request->hasFile('recipeImg')) {
                    $recipeImg = $request->file('recipeImg');
                    $recipeImgName = 'bg-side-1.' . $recipeImg->getClientOriginalExtension();
                    $recipeImg->move(public_path('assets/images/background'), $recipeImgName);
                }
                
                if ($request->hasFile('footerLogo')) {
                    $footerLogo = $request->file('footerLogo');
                    $footerLogoName = 'footer-logo1.' . $footerLogo->getClientOriginalExtension();
                    $footerLogo->move(public_path('assets/images'), $footerLogoName);
                }

                $newData = [
                    'header' => [
                        'blog' => __('home.header.blog'),
                        'contact' => __('home.header.contact'),
                        'about' => __('home.header.about'),
                        'products' => __('home.header.products'),
                    ],
                    'slider' => [
                        'slider1' => [
                            'title' => $request->sliderTitle1,
                            'subtitle' => $request->sliderSub1,
                            'text' => $request->sliderText1,
                            'image' => $sliderImg1Name ?? __('home.slider.slider1.image'),
                            'button' => __('home.slider.slider1.button'),
                        ],
                        'slider2' => [
                            'title' => $request->sliderTitle2,
                            'subtitle' => $request->sliderSub2,
                            'text' => $request->sliderText2,
                            'image' => $sliderImg2Name ?? __('home.slider.slider2.image'),
                            'button' => __('home.slider.slider2.button'),
                        ],
                        'slider3' => [
                            'title' => $request->sliderTitle3,
                            'subtitle' => $request->sliderSub3,
                            'text' => $request->sliderText3,
                            'image' => $sliderImg3Name ?? __('home.slider.slider3.image'),
                            'button' => __('home.slider.slider3.button'),
                        ],
                    ],
                    'interview' => [
                        'title' => $request->interviewTitle,
                        'subtitle' => $request->interviewSub,
                        'text' => $request->interviewText,
                        'image' => $interviewImgName ?? __('home.interview.image'),
                    ],
                    'why' => [
                        'why1' => [
                            'title' => $request->whyTitle1,
                            'text' => $request->whyText1,
                        ],
                        'why2' => [
                            'title' => $request->whyTitle2,
                            'text' => $request->whyText2,
                        ],
                        'why3' => [
                            'title' => $request->whyTitle3,
                            'text' => $request->whyText3,
                        ],
                        'why4' => [
                            'title' => $request->whyTitle4,
                            'text' => $request->whyText4,
                        ],
                    ],
                    'banner' => [
                        'banner1' => [
                            'title' => $request->bannerTitle1,
                            'text' => $request->bannerText1,
                            'image' => $bannerImg1Name ?? __('home.banner.banner1.image'),
                        ],
                        'banner2' => [
                            'title' => $request->bannerTitle2,
                            'text' => $request->bannerText2,
                            'image' => $bannerImg2Name ?? __('home.banner.banner2.image'),
                        ],
                    ],
                    'products' => [
                        'title' => $request->productsTitle,
                        'image' => $productImgName ?? __('home.products.image'),
                        'product1' => [
                            'image' => $sliderImg1Name ?? __('home.products.product1.image'),
                            'name' => $request->productName1,
                            'desc' => $request->productDesc1,
                        ],
                        'product2' => [
                            'image' => $sliderImg2Name ?? __('home.products.product2.image'),
                            'name' => $request->productName2,
                            'desc' => $request->productDesc2,
                        ],
                        'product3' => [
                            'image' => $sliderImg3Name ?? __('home.products.product3.image'),
                            'name' => $request->productName3,
                            'desc' => $request->productDesc3,
                        ],
                        'product4' => [
                            'image' => $sliderImg4Name ?? __('home.products.product4.image'),
                            'name' => $request->productName4,
                            'desc' => $request->productDesc4,
                        ],
                        'product5' => [
                            'image' => $sliderImg5Name ?? __('home.products.product5.image'),
                            'name' => $request->productName5,
                            'desc' => $request->productDesc5,
                        ],
                        'button' => __('home.products.button'),
                    ],
                    'desc' => [
                        'text' => $request->descText,
                        'image' => $descImgName ?? __('home.desc.image'),
                    ],
                    'gallery' => [
                        'image1' => $galleryImg1Name ?? __('home.gallery.image1'),
                        'image2' => $galleryImg2Name ?? __('home.gallery.image2'),
                        'image3' => $galleryImg3Name ?? __('home.gallery.image3'),
                        'image4' => $galleryImg4Name ?? __('home.gallery.image4'),
                        'image5' => $galleryImg5Name ?? __('home.gallery.image5'),
                        'image6' => $galleryImg6Name ?? __('home.gallery.image6'),
                    ],
                    'recipe' => [
                        'title' => $request->recipeTitle,
                        'subtitle' => $request->recipeSub,
                        'text' => $request->recipeText,
                        'image' => $recipeImgName ?? __('home.recipe.image'),
                    ],
                    'slogan' => [
                        'title' => $request->sloganTitle,
                    ],
                    'footer' => [
                        'contact' => [
                            'title' => __('home.footer.contact.title'),
                            'address' => $request->footerAddress,
                            'phone' => $request->footerPhone,
                            'email' => $request->footerEmail,
                        ],
                        'links' => [
                            'title' => __('home.footer.links.title'),
                        ],
                        'subscribe'=> [
                            'title' => __('home.footer.subscribe.title'),
                            'email' => __('home.footer.subscribe.email'),
                            'button' => __('home.footer.subscribe.button'),
                        ],
                        'info' => [
                            'logo' => $footerLogoName ?? __('home.footer.info.logo'),
                            'desc' => $request->footerDesc,
                        ],
                        'social' => [
                            'fb' => $request->footerFb,
                            'ig' => $request->footerIg,
                            'wa' => $request->footerWa,
                            'tg' => $request->footerTg,
                            'sk' => $request->footerSk,
                        ],
                        'copyright'=> [
                            'text' => __('home.footer.copyright.text'),
                            'powered' => __('home.footer.copyright.powered'),
                            'link' => __('home.footer.copyright.link'),
                            'name' => __('home.footer.copyright.name'),
                        ],
                    ],
                ];

                break;

            case 'blog':
                if ($request->hasFile('headerImg')) {
                    $image = $request->file('headerImg');
                    $headerImgName = 'bg-8.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/background'), $headerImgName);
                }

                $newData = [
                    'header' => [
                        'title' => $request->headerTitle, 
                        'subtitle' => $request->headerSub,
                        'image' => $headerImgName ?? __('blog.header.image'),
                    ],
                ];

                break;

            case 'about':
                if ($request->hasFile('headerImg')) {
                    $image = $request->file('headerImg');
                    $headerImgName = 'bg-7.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/background'), $headerImgName);
                }

                if ($request->hasFile('bodyImg1')) {
                    $image = $request->file('bodyImg1');
                    $bodyImg1Name = '1.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/misc'), $bodyImg1Name);
                }

                if ($request->hasFile('bodyImg2')) {
                    $image = $request->file('bodyImg2');
                    $bodyImg2Name = '2.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/misc'), $bodyImg2Name);
                }

                if ($request->hasFile('bannerImg')) {
                    $image = $request->file('bannerImg');
                    $bannerImgName = 'bg-2.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/background'), $bannerImgName);
                }

                if ($request->hasFile('achievementImg1')) {
                    $image = $request->file('achievementImg1');
                    $achievementImg1Name = '1.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/team'), $achievementImg1Name);
                }

                if ($request->hasFile('achievementImg2')) {
                    $image = $request->file('achievementImg2');
                    $achievementImg2Name = '2.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/team'), $achievementImg2Name);
                }

                if ($request->hasFile('achievementImg3')) {
                    $image = $request->file('achievementImg3');
                    $achievementImg3Name = '3.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/team'), $achievementImg3Name);
                }

                if ($request->hasFile('achievementImg4')) {
                    $image = $request->file('achievementImg4');
                    $achievementImg4Name = '4.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/team'), $achievementImg4Name);
                }

                $newData = [
                    'header' => [
                        'title' => $request->headerTitle, 
                        'subtitle' => $request->headerSub,
                        'image' => $headerImgName ?? __('about.header.image'),
                    ],
                    'body' => [
                        'title' => $request->bodyTitle,
                        'p1' => $request->bodyP1,
                        'p2' => $request->bodyP2,
                        'p3' => $request->bodyP3,
                        'image1' => $bodyImg1Name ?? __('about.body.image1'),
                        'image2' => $bodyImg2Name ?? __('about.body.image2'),
                        'feedback' => [
                            'number' => $request->feedbackNum,
                            'text' => $request->feedbackText
                        ],
                        'percent' => [
                            'number' => $request->percentNum,
                            'text' => $request->percentText
                        ],
                    ],
                    'banner' => [
                        'title' => $request->bannerTitle,
                        'subtitle' => $request->bannerSub,
                        'image' => $bannerImgName ?? __('about.banner.image'),
                    ],
                    'achievement'=> [
                        'image1' => $achievementImg1Name ?? __('about.achievement.image1'),
                        'title1' => $request->achievementTitle1,
                        'text1' => $request->achievementText1,
                        'image2' => $achievementImg2Name ?? __('about.achievement.image2'),
                        'title2' => $request->achievementTitle2,
                        'text2' => $request->achievementText2,
                        'image3' => $achievementImg3Name ?? __('about.achievement.image3'),
                        'title3' => $request->achievementTitle3,
                        'text3' => $request->achievementText3,
                        'image4' => $achievementImg4Name ?? __('about.achievement.image4'),
                        'title4' => $request->achievementTitle4,
                        'text4' => $request->achievementText4,
                    ],
                ];

                break;

            case 'contact':

                if ($request->hasFile('headerImg')) {
                    $image = $request->file('headerImg');
                    $headerImgName = 'bg-9.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/background'), $headerImgName);
                }

                $newData = [
                    'header' => [
                        'title' => $request->headerTitle, 
                        'subtitle' => $request->headerSub,
                        'image' => $headerImgName ?? __('contact.header.image'),
                    ],
                    'content' => [
                        'title' => __('contact.content.title'),
                        'address' => $request->address,
                        'phone' => $request->phone,
                        'email' => $request->email,
                    ],
                    'form' => [
                        'name' => __('contact.form.name'),
                        'email' => __('contact.form.email'),
                        'phone' => __('contact.form.phone'),
                        'message' => __('contact.form.message'),
                        'send' => __('contact.form.send'),
                    ],
                ];

                break;
            case 'product':

                if ($request->hasFile('headerImg')) {
                    $image = $request->file('headerImg');
                    $headerImgName = 'bg-10.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/background'), $headerImgName);
                }

                $newData = [
                    'header' => [
                        'title' => $request->headerTitle, 
                        'subtitle' => $request->headerSub,
                        'image' => $headerImgName ?? __('contact.header.image'),
                    ],
                ];

                break;
            default:
                abort(404);
                break;
        }
        $content = "<?php\n\nreturn " . var_export($newData, true) . ";";
        File::put($filePath, $content);

        return redirect()->back()->with('success', 'Site Contents Updated Successfully.');
    }

    public function setLocale($lang)
    {
        if (in_array($lang, ['en', 'fa'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}
