<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => ['required','numeric'],
            'title' => ['required','string'],
            'description' => ['required','string'],
            'condition' => ['required','string'],
            'comprehensive_description' => ['required_if:condition,used','string'],
            'weight' => ['required','numeric'],
            'weight_unit' => ['required_if:weight,numeric','string'],
            'sku' => ['required_if:variation,non_variant_product','string'],
            'quantity' => ['required_if:variation,non_variant_product','numeric'],
            'price' => ['required_if:variation,non_variant_product','numeric'],
            'rsp' => ['required_if:variation,non_variant_product','numeric'],
        ];
    }


//    public function withValidator(Validator $validator)
//    {
//        if ($validator->fails()) return;
//        $validator->after(function (Validator $validator) {
//
//
//            $specificationTypeArray = $this->specification_type;
//            $specificationValueArray = $this->specification_type_value;
//
//
//            for($i = 0;$i < Count($specificationTypeArray);$i++){
//               $specificationType = $specificationTypeArray[$i];
//               $condition = isset($specificationType) || isset($specificationType);
//               if($condition){
//                   $validator->errors()->add('name', 'Specification type or value is empty');
//               }
//            }
//
////
////           $variationTypeArray = $this->variant_type;
////
////
////            for($h = 0;$h <Count($variationTypeArray);$h++){
////                $variantType = $variationTypeArray[$h];
////                $condition = empty($variantType) || empty($variantType);
////               if($condition) {
////                   dd("empty");
////              }
////            }
//
////
////            $marketplaceId = $this->route('marketplace');
////           if(SellerMarketplace::checkIsConnectedWithSellersByMarketplaceId($marketplaceId)){
////              $validator->errors()->add('name', 'The marketplace connected with sellers');
////            }
//        });
//    }
}
