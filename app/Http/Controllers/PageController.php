<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        if ($request->input('username') === 'tantri' && $request->input('password') === '123456') {
            $data=[
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'name'=> 'Tantri Okta Puspita Sari',
                'email'=> 'tantri@example.com',
                'tlpn'=> '08123456789',
            ];
            session(['user' => $data]);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['Invalid credentials']);
    }
    public function color(){
        
        $dataImg = [
            'Warm Spring' => [
                'Wardah Colorfit 5D Cloud Cushion - 21W Linen',
                'Wardah Glasting Liquid Lip - 04 Rosewood Radiance',
                'Wardah Colorfit Cream Blush - 01 Sand Coral',
                'Wardah Colorfit Quad Eye Palette - 03 Sunlit Blaze',
            ],
            'Warm Autumn' => [
                'Wardah Colorfit 5D Cloud Cushion - 21W Linen',
                'Wardah Glasting Liquid Lip - 14 Latte Lacquer',
                'Wardah Colorfit Cream Blush - 05 Peaceful Plum',
                'Wardah Colorfit Quad Eye Palette - 01 Brunette Dawn',
            ],
            'Cool Summer' => [
                'Wardah Colorfit 5D Cloud Cushion - 21C Shell',
                'Wardah Glasting Liquid Lip - 12 Shine Sorbet',
                'Wardah Colorfit Cream Blush - 03 Summer Peach',
                'Wardah Colorfit Quad Eye Palette - 02 Rose Aurora',
            ],
            'Cool Winter' => [
                'Wardah Colorfit 5D Cloud Cushion - 21C Shell',
                'Wardah Glasting Liquid Lip - 08 Plush Pome',
                'Wardah Colorfit Cream Blush - 04 Ethereal Rose',
                'Wardah Colorfit Quad Eye Palette - 02 Rose Aurora',
            ],
        ];

        $bgColors = [
            'Warm Spring' => 'bg-yellow-100 text-yellow-800',
            'Warm Autumn' => 'bg-orange-100 text-orange-800',
            'Cool Summer' => 'bg-blue-100 text-blue-800',
            'Cool Winter' => 'bg-purple-100 text-purple-800',
        ];

        // Placeholder gambar untuk setiap produk
        $images = [
            'Wardah Colorfit 5D Cloud Cushion - 21W Linen' => 'https://p16-oec-sg.ibyteimg.com/tos-alisg-i-aphluv4xwc-sg/3757bda66de24191a7f8f212d0aec1c3~tplv-aphluv4xwc-resize-jpeg:800:800.jpeg?dr=15584&t=555f072d&ps=933b5bde&shp=6ce186a1&shcp=e1be8f53&idc=maliva&from=1826719393',
            'Wardah Glasting Liquid Lip - 04 Rosewood Radiance' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/112/MTA-177448809/br-m036969-03522_wardah-glasting-liquid-lip_full07-3c224225.jpg',
            'Wardah Colorfit Cream Blush - 01 Sand Coral' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rd4s-lvepurwjoe2520',
            'Wardah Colorfit Quad Eye Palette - 03 Sunlit Blaze' => 'https://bimg.akulaku.net/goods/spu/5a3a0eedb56046d891bf10526b1a2f314193.jpg?w=726&q=80&fit=1',

            'Wardah Glasting Liquid Lip - 14 Latte Lacquer' => 'https://id-test-11.slatic.net/p/a588cf1608db824b604b58d51298c8ee.png',
            'Wardah Colorfit Cream Blush - 05 Peaceful Plum' => 'https://enviostore.com/media/product/5084/product_image-1726302473.jpg',
            'Wardah Colorfit Quad Eye Palette - 01 Brunette Dawn' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-85306064/wardah_wardah_colorfit_quad_eye_palette_-_eyeshadow_-brunette_dawn-rose_aurora-sunlit_blaze-_full07_cem5nw4o.jpg',

            'Wardah Colorfit 5D Cloud Cushion - 21C Shell' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/12/13/9e45ef2e-18fb-456b-a272-3efdf29bb435.jpg',
            'Wardah Glasting Liquid Lip - 12 Shine Sorbet' => 'https://medias.watsons.co.id/publishing/WTCID-41259-side-zoom.jpg?version=1728595738',
            'Wardah Colorfit Cream Blush - 03 Summer Peach' => 'https://enviostore.com/media/product/181/product_image-1722149244.jpeg',
            'Wardah Colorfit Quad Eye Palette - 02 Rose Aurora' => 'https://d2jlkn4m127vak.cloudfront.net/medias/articles/thumb-square-1691774605.png',

            'Wardah Glasting Liquid Lip - 08 Plush Pome' => 'https://down-id.img.susercontent.com/file/id-11134207-7rash-m5no3o3zdugyce',
            'Wardah Colorfit Cream Blush - 04 Ethereal Rose' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98x-ltrm0q6f9yx64b',
        ];

        return view('pengelolaan', compact('dataImg', 'bgColors', 'images'));
    }
}
