<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SanPham;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sanpham::create( [
            'id'=>1,
            'ten_san_pham'=>'Shirt_H&M1',
            'mo_ta'=>'Conscious. Short-sleeved shirt in woven viscose fabric with a printed pattern. Resort collar, buttons without placket, and straight-cut hem. Relaxed Fit ',
            'gia'=>40.00,
            'loai_san_pham_id'=>1,
            'thuong_hieu_id'=>3,
            'created_at'=>'2022-01-02 02:56:41',
            'updated_at'=>'2022-01-20 02:39:18',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>2,
            'ten_san_pham'=>'Shirt_H&M2',
            'mo_ta'=>'Long-sleeved shirt in washed Oxford cotton with a button-down collar, chest pocket and yoke with a hanger loop at the back. Regular fit - a classic fit with good room for movement and a gently tapered waist to create a comfortable, tailored silhouette.',
            'gia'=>60.00,
            'loai_san_pham_id'=>1,
            'thuong_hieu_id'=>3,
            'created_at'=>'2022-01-02 03:17:57',
            'updated_at'=>'2022-01-02 03:17:57',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>3,
            'ten_san_pham'=>'T-Shirt_Nike1',
            'mo_ta'=>'Best for running, Contrast logo printed short sleeves tee, Round neckline, Unlined, Regular fit, Slip on style, Sleeveless,  Stretchable, Polyblend, Model wears an M and is 180cm tall.',
            'gia'=>100.00,
            'loai_san_pham_id'=>2,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:22:08',
            'updated_at'=>'2022-01-02 03:22:08',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>4,
            'ten_san_pham'=>'T-Shirt_Nike2',
            'mo_ta'=>'Best for lifestyle, Round neckline, Unlined, Regular fit, Slip on style, Short sleeves, Stretchable, Regular length, The classic-fit tee silhouette has a relaxed feel down through the body and hips, Cotton.',
            'gia'=>95.00,
            'loai_san_pham_id'=>2,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:24:38',
            'updated_at'=>'2022-01-02 03:24:38',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>5,
            'ten_san_pham'=>'T-Shirt_UA1',
            'mo_ta'=>'Best for running, Brand logo running tee, Crew neckline, Regular fit, Polyester, Model wears an M and is 185cm tall.',
            'gia'=>90.00,
            'loai_san_pham_id'=>2,
            'thuong_hieu_id'=>4,
            'created_at'=>'2022-01-02 03:26:31',
            'updated_at'=>'2022-01-03 04:26:40',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>6,
            'ten_san_pham'=>'Pant_Adidas1',
            'mo_ta'=>'Adidas performance, Best for running, Brand logo running pants, Mid rise, Slim fit, Elasticised waistband, Moisture absorbing, 2 sweat-guard pocket, Recycled polyblend,- Model wears an M and is 188cm tall.',
            'gia'=>150.00,
            'loai_san_pham_id'=>3,
            'thuong_hieu_id'=>2,
            'created_at'=>'2022-01-02 03:29:10',
            'updated_at'=>'2022-01-02 03:29:10',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>7,
            'ten_san_pham'=>'Pant_H&M1',
            'mo_ta'=>'Joggers in sweatshirt fabric with a small print motif on the front, covered elastication and a concealed drawstring at the waist, a fake fly, side pockets and a welt back pocket.',
            'gia'=>54.00,
            'loai_san_pham_id'=>3,
            'thuong_hieu_id'=>3,
            'created_at'=>'2022-01-02 03:31:32',
            'updated_at'=>'2022-01-02 03:31:32',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>8,
            'ten_san_pham'=>'Pant_H&M2',
            'mo_ta'=>'5-pocket trousers in washed stretch twill with a regular waist and zip fly. Slim fit which is relaxed over the thighs and tapers from the knees down for a relaxed, well-tailored look.',
            'gia'=>75.00,
            'loai_san_pham_id'=>3,
            'thuong_hieu_id'=>3,
            'created_at'=>'2022-01-02 03:33:11',
            'updated_at'=>'2022-01-02 03:33:11',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>9,
            'ten_san_pham'=>'Pant_Nike1',
            'mo_ta'=>'Best for training, Nike Flex fabric stretches with your body, helping you get the most out of your performance-without getting in your way, Regular fit, Elastic waistband and drawcord, Side pockets with mesh lining, Polyester.',
            'gia'=>152.00,
            'loai_san_pham_id'=>3,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:36:10',
            'updated_at'=>'2022-01-02 03:36:10',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>10,
            'ten_san_pham'=>'OW_Adidas1',
            'mo_ta'=>'Adidas originals, Best for lifestyle, Monochrome track jacket with signature three stripes, Stand collar, Regular fit, Front zip fastening, Side zip pockets, Ribbed cuffs and hem, Recycled Polyblend, Model wears an M and is 185cm tall.',
            'gia'=>319.00,
            'loai_san_pham_id'=>5,
            'thuong_hieu_id'=>2,
            'created_at'=>'2022-01-02 03:39:10',
            'updated_at'=>'2022-01-03 04:27:33',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>11,
            'ten_san_pham'=>'OW_Adidas2',
            'mo_ta'=>'Adidas originals, Best for lifestyle, adidas three stripes sleeves track top, High neckline, Regular fit, Zip fastening, Long sleeves, 2 pocket design, Polyblend, Model wears an M and is 188cm tall.',
            'gia'=>329.00,
            'loai_san_pham_id'=>5,
            'thuong_hieu_id'=>2,
            'created_at'=>'2022-01-02 03:40:41',
            'updated_at'=>'2022-01-03 04:28:01',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>12,
            'ten_san_pham'=>'OW_H&M1',
            'mo_ta'=>'Yoke at the back and metal buttons down the front. Open chest pocket, long sleeves with plackets and buttoned cuffs, and a gently rounded hem.',
            'gia'=>130.00,
            'loai_san_pham_id'=>5,
            'thuong_hieu_id'=>3,
            'created_at'=>'2022-01-02 03:42:09',
            'updated_at'=>'2022-01-03 04:28:12',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>13,
            'ten_san_pham'=>'Sneaker_Nike1',
            'mo_ta'=>'Best for lifestyle, Wavy panelled detail lace up shoes, Polyurethane and textile upper, Textile inner, Rubber outsole, Lace up fastening, Round toecap.',
            'gia'=>527.00,
            'loai_san_pham_id'=>4,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:46:03',
            'updated_at'=>'2022-01-02 03:46:03',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>14,
            'ten_san_pham'=>'Sneaker_Nike2',
            'mo_ta'=>'Best for lifestyle, Knitted sneakers with monotone heel and accents, Flyknit/TPU upper, Textile insole, Rubber outsole, Lace up fastening, Round toe.',
            'gia'=>829.00,
            'loai_san_pham_id'=>4,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:47:28',
            'updated_at'=>'2022-01-02 03:47:28',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>15,
            'ten_san_pham'=>'Sneaker_Nike3',
            'mo_ta'=>'Best for lifestyle, Mesh upper, Textile insole, Foam midsole, The monofilament mesh on the upper adds breathability and nods to car interiors while the richly textured material adds depth to your look, Lace up fastening, Round toe.',
            'gia'=>320.00,
            'loai_san_pham_id'=>4,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:49:44',
            'updated_at'=>'2022-01-02 03:49:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            Sanpham::create( [
            'id'=>16,
            'ten_san_pham'=>'Sneaker_Nike4',
            'mo_ta'=>'Best for basketball, Brand logo overlay detail shoes, Textile, leather upper, Textile insole, Rubber outsole, Court ready cushioning and support, Grippy rubber sole for court surfaces, Round toe, Lace fastening.',
            'gia'=>202.00,
            'loai_san_pham_id'=>4,
            'thuong_hieu_id'=>1,
            'created_at'=>'2022-01-02 03:50:36',
            'updated_at'=>'2022-01-02 03:50:36',
            'deleted_at'=>NULL
            ] );
    }
}
