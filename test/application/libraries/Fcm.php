<?php defined('BASEPATH') or exit('No direct script access allowed');

    class Fcm
    {
        private $title;
        private $message;
        private $image;
        private $data;
        private $is_background;
        private $type;
        private $ids;

        public function setType($type)
        {
            $this->type = $type;
        }
        
        public function setTitle($title)
        {
            $this->title = $title;
        }
        
        public function setids($ids)
        {
            $this->ids = $ids;
        }
  
        public function setMessage($message)
        {
          $this->message = $message;
        }
        public function setImage($imageUrl)
        {
            $this->image = $imageUrl;
        }
        public function setPayload($data)
        {
            $this->data = $data;
        }
        public function setIsBackground($is_background)
        {
            $this->is_background = $is_background;
        }
        
        public function getPush()
        {
            $res = array();
            $res['data']['title']   = $this->title;
            $res['data']['type']    = $this->type;
            $res['data']['ids']     = $this->ids;
           //$res['data']['is_background'] = $this->is_background;
            $res['data']['message'] = $this->message;
            $res['data']['image']   = $this->image;
            $res['data']['payload'] = $this->data;
            $res['data']['timestamp'] = date('Y-m-d G:i:s');
            return $res;
        }

        public function send($to, $message)
        {
            $fields = array(
                'to'   => $to,
                'data' => $message,
            );
            return $this->sendPushNotification($fields);
        }
        public function sendToTopic($to, $message)
        {
            $fields = array(
                'to' => '/topics/' . $to,
                'data' => $message,
                'android' =>  '{"priority":"high"}'
            );
            return $this->sendPushNotification($fields);
        }
        public function sendMultiple($registration_ids, $message)
        {
            $fields = array(
                'registration_ids' => $registration_ids,
                'data' => $message,
            );
            return $this->sendPushNotification($fields);
        }
        private function sendPushNotification($fields)
        {    
            $CI = &get_instance();
            $CI->load->config('androidfcm'); //loading of config file
            // Set POST variables
            $url = $CI->config->item('fcm_url');
            $headers = array(
                'Authorization: key='. $CI->config->item('key'),
                'Content-Type: application/json',
            );
            // Open connection
            $ch = curl_init();
            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            $result = curl_exec($ch);
            if ($result === false) 
            {
                die('Curl failed: ' . curl_error($ch));
            }
            curl_close($ch);
            return $result;
        }
    
    }