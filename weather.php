<?php

$url = "https://api.openweathermap.org/data/2.5/forecast?q=tokyo&appid=6f629ab2fcaa2da895837333f88ba007&units=metric";


global $data;
$contents = file_get_contents($url);
$data = json_decode($contents);
 

class Weather
{



    // variables
    public $temp;
    public $temp_max = '';
    public $temp_min = '';
    public $feels_like = '';
    public $pressure = '';
    public $humidity = '';
    public $clouds = '';
    public $wind_spd = '';
    public $wind_deg = '';
    public $city_name = '';
    public $country = '';
    public $date = '';
    public $weather_icon = '';





    // getters, setters and a contructor
 
    public function getTemp()
    {
        
        return round($this->temp);
    }
    public function getTemp_Max()
    {
        return round($this->temp_max);
    }
    public function getTemp_Min()
    {
        return round($this->temp_min);
    }
    public function getFeels_Like()
    {
        return round($this->feels_like);
    }
    public function getPressure()
    {
        return $this->pressure;
    }
    public function getHumidity()
    {
        return $this->humidity;
    }
    public function getClouds()
    {
        return $this->clouds;
    }
    public function getWind_Speed()
    {
        return $this->wind_spd;
    }
    public function getWind_Deg()
    {
        return $this->wind_deg;
    }
    public function getWeather_Icon()
    {
        return $this->weather_icon;
    }
    public function getCity_Name()
    {
        global $data;
        return $this->city_name = $data->city->name;
    }
    public function getCountry()
    {
        global $data;
        return $this->country = $data->city->country;
    }
    public function getDay()
    {
        $day = new DateTime($this->date);
        return $day->format('l');
    }
    public function getDay_Short()
    {
        $day = new DateTime($this->date);
        return $day->format('D');
    }
    public function getDate()
    {
        $date_format = new DateTime($this->date);
        return $date_format->format('d M Y');
    }
    



    
    // data gathering method
    public function set_weather_data ($day_num) {

        global $data;

        $this->temp = $data->list[$day_num]->main->temp;
        $this->temp_max = $data->list[$day_num]->main->temp_max;
        $this->temp_min = $data->list[$day_num]->main->temp_min;
        $this->feels_like = $data->list[$day_num]->main->feels_like;
        $this->pressure = $data->list[$day_num]->main->pressure;
        $this->humidity = $data->list[$day_num]->main->humidity;
        $this->clouds = $data->list[$day_num]->weather[0]->main;
        $this->wind_spd = $data->list[$day_num]->wind->speed;
        $this->wind_deg = $data->list[$day_num]->wind->deg;
        $this->weather_icon = $data->list[$day_num]->weather[0]->icon;  
        $this->date = $data->list[$day_num]->dt_txt;
        

    }
}

$day = new Weather();




?>