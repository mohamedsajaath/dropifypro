<?php
namespace App\Helper\Royalmail;

use App\Models\royal_mail;

class RoyalMailHelper{

    public const baseUrl ="https://api.parcel.royalmail.com/api/v1/";
    public const subUrl = 'orders/';

    public static function CreateOrder(){
      $token = royal_mail::first()->bearer_token;
      // dd($token);
        $headers = [
          'Authorization: Bearer '.$token,
          'Content-Type: application/json'
        ];
        // dd($headers);
        $payload =array (
          'items' =>
          array (
            0 =>
            array (
              'orderReference' => 'test0002',
              'recipient' =>
              array (
                'address' =>
                array (
                  'fullName' => 'Hakeem',
                  'companyName' => 'Imara',
                  'addressLine1' => '179 Kent House Rd',
                  'addressLine2' => 'string',
                  'addressLine3' => 'string',
                  'city' => 'London',
                  'county' => 'London',
                  'postcode' => '14500',
                  'countryCode' => 'GB',
                ),
                'phoneNumber' => '+44 (0) 1423 396979',
                'emailAddress' => '071husain484@gmail.com',
                'addressBookReference' => 'string',
              ),
              'sender' =>
              array (
                'tradingName' => 'test_trading',
                'phoneNumber' => '+44 (0) 1423 396979',
                'emailAddress' => 'test@gmail.com',
              ),
              'billing' =>
              array (
                'address' =>
                array (
                  'fullName' => 'ABDHakeem',
                  'companyName' => 'Imara',
                  'addressLine1' => 'string',
                  'addressLine2' => 'string',
                  'addressLine3' => 'string',
                  'city' => 'London',
                  'county' => 'London',
                  'postcode' => 'SO15 2',
                  'countryCode' => '+44',
                ),
                'phoneNumber' => '+44 (0) 1423 396979',
                'emailAddress' => 'test@gmail.com',
              ),
              'packages' =>
              array (
                0 =>
                array (
                  'weightInGrams' => 1,
                  'packageFormatIdentifier' => 'smallParcel',
                  'customPackageFormatIdentifier' => 'string',
                  'dimensions' =>
                  array (
                    'heightInMms' => 5,
                    'widthInMms' => 5,
                    'depthInMms' => 5,
                  ),
                  'contents' =>
                  array (
                    0 =>
                    array (
                      'name' => 'Jeans',
                      'SKU' => 'test_sku',
                      'quantity' => 1000,
                      'unitValue' => 50,
                      'unitWeightInGrams' => 100,
                      'customsDescription' => 'test_description',
                      'extendedCustomsDescription' => 'string',
                      'customsCode' => 45656566,
                      'originCountryCode' => 'GB',
                      'customsDeclarationCategory' => 'none',
                      'requiresExportLicence' => true,
                    ),
                  ),
                ),
              ),
              'orderDate' => '2022-11-13T14:15:22Z',
              'specialInstructions' => 'string',
              'subtotal' => 0,
              'shippingCostCharged' => 40,
              'otherCosts' => 100,
              'total' => 240,
              'currencyCode' => 'GBP',
              'postageDetails' =>
              array (
                'sendNotificationsTo' => 'sender',
                'serviceCode' => 'olp1',
                'isLocalCollect' => false,
                'safePlace' => '',
                'department' => 'string',
                'AIRNumber' => 'string',
                'IOSSNumber' => 'string',
                'requiresExportLicense' => true,
                'commercialInvoiceNumber' => 'string',
                'commercialInvoiceDate' => '2019-08-24T14:15:22Z',
              ),
              'tags' =>
              array (
                0 =>
                array (
                  'key' => 'string',
                  'value' => 'string',
                ),
              ),
              'label' =>
              array (
                'includeLabelInResponse' => true,
                'includeCN' => true,
                'includeReturnsLabel' => true,
              ),
            ),
          ),
        );
        $payload=json_encode($payload);

        $response=self::doCurl(RoyalMailHelper::baseUrl . 'orders','POST',$headers,$payload);
        dd($response);
    }

    public static function getOrder($endpoint){
      $token = royal_mail::first()->bearer_token;
      $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json'
      ];



      $response=self::doCurl(RoyalMailHelper::baseUrl . RoyalMailHelper::subUrl . $endpoint,'GET',$headers);
      dd($response);
    }

    public static function updateOrder($endpoint){
      $token = royal_mail::first()->bearer_token;
      $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json'
      ];
      $payload =array (
        'items' =>
        array (
          0 =>
          array (
            'orderIdentifier' => 1005,
            'orderReference' => '',
            'status' => 'despatched',
            'trackingNumber' => 'string',
            'despatchDate' => '2022-11-14T14:15:22Z',
            'shippingCarrier' => 'string',
            'shippingService' => 'string',
          ),
        ),
      );


      $payload=json_encode($payload);

            } catch (err) {
                console.log(err);
            }
