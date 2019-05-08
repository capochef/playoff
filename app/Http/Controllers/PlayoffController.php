<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayoffController extends Controller
{
    public function index()
    {
        $prevision = '<table border="0" width="552" cellspacing="0" cellpadding="0">
            <colgroup>
            <col width="28">
            <col width="180">
            <col span="2" width="26">
            <col width="26">
            <col width="44">
            <col span="2" width="40">
            <col width="40">
            <col span="2" width="51"></colgroup>
            <tbody>
            <tr>
            <th width="28"></th>
            <th width="180">GIRONE A</th>
            <th width="26">W</th>
            <th width="26">L</th>
            <th width="26">G</th>
            <th width="44">Pct</th>
            <th width="40">Diff</th>
            <th width="40">PF</th>
            <th width="40">PA</th>
            <th width="51">Off</th>
            <th width="51">Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">MAD BULLS Barletta</td>
            <td class="xl63">6</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl66">1,000</td>
            <td class="xl67">136</td>
            <td class="xl67">158</td>
            <td class="xl67">22</td>
            <td class="xl68">31,60</td>
            <td class="xl68">4,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">ELEPHANTS Catania</td>
            <td class="xl63">3</td>
            <td class="xl63">3</td>
            <td class="xl63">6</td>
            <td class="xl66">0,500</td>
            <td class="xl67">9</td>
            <td class="xl67">100</td>
            <td class="xl67">91</td>
            <td class="xl68">20,00</td>
            <td class="xl68">18,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">ACHEI Crotone</td>
            <td class="xl63">3</td>
            <td class="xl63">3</td>
            <td class="xl63">6</td>
            <td class="xl66">0,500</td>
            <td class="xl67">-17</td>
            <td class="xl67">124</td>
            <td class="xl67">141</td>
            <td class="xl68">20,67</td>
            <td class="xl68">23,50</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">NAVY SEALS Bari</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-128</td>
            <td class="xl67">79</td>
            <td class="xl67">207</td>
            <td class="xl68">13,17</td>
            <td class="xl68">34,50</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE B</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">BRIGANTI Napoli</td>
            <td class="xl63">6</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl66">1,000</td>
            <td class="xl67">91</td>
            <td class="xl67">147</td>
            <td class="xl67">56</td>
            <td class="xl68">29,40</td>
            <td class="xl68">11,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">GRIFONI Perugia</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">78</td>
            <td class="xl67">150</td>
            <td class="xl67">72</td>
            <td class="xl68">30,00</td>
            <td class="xl68">14,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">EAGLES Salerno</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-8</td>
            <td class="xl67">116</td>
            <td class="xl67">124</td>
            <td class="xl68">23,20</td>
            <td class="xl68">24,80</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">82ERS Napoli</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-161</td>
            <td class="xl67">38</td>
            <td class="xl67">199</td>
            <td class="xl68">7,60</td>
            <td class="xl68">39,80</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE C</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">FIGHTING DUCKS Roma</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">19</td>
            <td class="xl67">147</td>
            <td class="xl67">128</td>
            <td class="xl68">29,40</td>
            <td class="xl68">25,60</td>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">CRUSADERS Cagliari</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">11</td>
            <td class="xl67">120</td>
            <td class="xl67">109</td>
            <td class="xl68">20,00</td>
            <td class="xl68">18,17</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">LEGIO XIII Roma</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-7</td>
            <td class="xl67">133</td>
            <td class="xl67">140</td>
            <td class="xl68">26,60</td>
            <td class="xl68">28,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">MINATORI Roma Sud</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-23</td>
            <td class="xl67">124</td>
            <td class="xl67">147</td>
            <td class="xl68">20,67</td>
            <td class="xl68">24,50</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE D</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">TRAPPERS Cecina</td>
            <td class="xl63">5</td>
            <td class="xl63">1</td>
            <td class="xl63">6</td>
            <td class="xl66">0,833</td>
            <td class="xl67">129</td>
            <td class="xl67">190</td>
            <td class="xl67">61</td>
            <td class="xl68">38,00</td>
            <td class="xl68">12,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">RAIDERS West Coast</td>
            <td class="xl63">5</td>
            <td class="xl63">1</td>
            <td class="xl63">6</td>
            <td class="xl66">0,833</td>
            <td class="xl67">66</td>
            <td class="xl67">144</td>
            <td class="xl67">78</td>
            <td class="xl68">28,80</td>
            <td class="xl68">15,60</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">SIRBONS Cagliari</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-37</td>
            <td class="xl67">105</td>
            <td class="xl67">142</td>
            <td class="xl68">21,00</td>
            <td class="xl68">28,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl69">VETERANS Grosseto</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-158</td>
            <td class="xl67">62</td>
            <td class="xl67">220</td>
            <td class="xl68">12,40</td>
            <td class="xl68">44,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE E</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">CHIEFS Ravenna</td>
            <td class="xl63">6</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl66">1,000</td>
            <td class="xl67">215</td>
            <td class="xl67">277</td>
            <td class="xl67">62</td>
            <td class="xl68">46,17</td>
            <td class="xl68">10,33</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">ANGELS Pesaro</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">104</td>
            <td class="xl67">172</td>
            <td class="xl67">68</td>
            <td class="xl68">34,40</td>
            <td class="xl68">13,60</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">TITANS Broncos</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-38</td>
            <td class="xl67">152</td>
            <td class="xl67">190</td>
            <td class="xl68">25,33</td>
            <td class="xl68">31,67</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">BUCCANEERS Comacchio</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-281</td>
            <td class="xl67">18</td>
            <td class="xl67">299</td>
            <td class="xl68">3,60</td>
            <td class="xl68">59,80</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE F</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">ISLANDERS Venezia</td>
            <td class="xl63">5</td>
            <td class="xl63">1</td>
            <td class="xl63">6</td>
            <td class="xl66">0,833</td>
            <td class="xl67">156</td>
            <td class="xl67">192</td>
            <td class="xl67">36</td>
            <td class="xl68">32,00</td>
            <td class="xl68">6,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">RAVENS Imola</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">16</td>
            <td class="xl67">108</td>
            <td class="xl67">92</td>
            <td class="xl68">21,60</td>
            <td class="xl68">18,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">DOVES Bologna</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-97</td>
            <td class="xl67">75</td>
            <td class="xl67">172</td>
            <td class="xl68">15,00</td>
            <td class="xl68">34,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">ALLIGATORS Rovigo</td>
            <td class="xl63">1</td>
            <td class="xl63">5</td>
            <td class="xl63">6</td>
            <td class="xl66">0,167</td>
            <td class="xl67">-75</td>
            <td class="xl67">52</td>
            <td class="xl67">127</td>
            <td class="xl68">13,00</td>
            <td class="xl68">31,75</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE G</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>';

        if(isset($_REQUEST['prevision']) && $_REQUEST['prevision'] == 'win')
            $prevision .= '<tr>
                <td class="xl63" height="26">1</td>
                <td class="xl64">LEONI Basiliano</td>
                <td class="xl63">6</td>
                <td class="xl63">0</td>
                <td class="xl63">6</td>
                <td class="xl66">1,000</td>
                <td class="xl67">35</td>
                <td class="xl67">80</td>
                <td class="xl67">45</td>
                <td class="xl68">16,00</td>
                <td class="xl68">9,00</td>
                </tr>
                <tr>
                <td class="xl63" height="26">2</td>
                <td class="xl64">29ERS Alto Livenza</td>
                <td class="xl63">4</td>
                <td class="xl63">2</td>
                <td class="xl63">6</td>
                <td class="xl66">0,667</td>
                <td class="xl67">99</td>
                <td class="xl67">135</td>
                <td class="xl67">36</td>
                <td class="xl68">33,75</td>
                <td class="xl68">9,00</td>
                </tr>';
        else
            $prevision .= '<tr>
                <td class="xl63" height="26">2</td>
                <td class="xl64">29ERS Alto Livenza</td>
                <td class="xl63">5</td>
                <td class="xl63">1</td>
                <td class="xl63">6</td>
                <td class="xl66">0,833</td>
                <td class="xl67">99</td>
                <td class="xl67">135</td>
                <td class="xl67">36</td>
                <td class="xl68">33,75</td>
                <td class="xl68">9,00</td>
                </tr>
                <tr>
                <td class="xl63" height="26">1</td>
                <td class="xl64">LEONI Basiliano</td>
                <td class="xl63">5</td>
                <td class="xl63">1</td>
                <td class="xl63">6</td>
                <td class="xl66">0,833</td>
                <td class="xl67">35</td>
                <td class="xl67">80</td>
                <td class="xl67">45</td>
                <td class="xl68">16,00</td>
                <td class="xl68">9,00</td>
                </tr>';

        $prevision .= '<tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">DRAGHI Udine</td>
            <td class="xl63">1</td>
            <td class="xl63">5</td>
            <td class="xl63">6</td>
            <td class="xl66">0,167</td>
            <td class="xl67">-72</td>
            <td class="xl67">55</td>
            <td class="xl67">127</td>
            <td class="xl68">11,00</td>
            <td class="xl68">25,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">MULI Trieste</td>
            <td class="xl63">1</td>
            <td class="xl63">5</td>
            <td class="xl63">6</td>
            <td class="xl66">0,167</td>
            <td class="xl67">-62</td>
            <td class="xl67">40</td>
            <td class="xl67">102</td>
            <td class="xl68">10,00</td>
            <td class="xl68">25,50</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE H</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">REDSKINS Verona</td>
            <td class="xl63">6</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl66">1,000</td>
            <td class="xl67">168</td>
            <td class="xl67">189</td>
            <td class="xl67">21</td>
            <td class="xl68">37,80</td>
            <td class="xl68">4,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">THUNDERS Trento</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">7</td>
            <td class="xl67">76</td>
            <td class="xl67">69</td>
            <td class="xl68">15,20</td>
            <td class="xl68">13,80</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">MEXICANS Pederobba</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-55</td>
            <td class="xl67">80</td>
            <td class="xl67">135</td>
            <td class="xl68">16,00</td>
            <td class="xl68">27,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">HURRICANES Vicenza</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-120</td>
            <td class="xl67">25</td>
            <td class="xl67">145</td>
            <td class="xl68">5,00</td>
            <td class="xl68">29,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE I</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">RAMS Milano</td>
            <td class="xl63">5</td>
            <td class="xl63">1</td>
            <td class="xl63">6</td>
            <td class="xl66">0,833</td>
            <td class="xl67">87</td>
            <td class="xl67">192</td>
            <td class="xl67">105</td>
            <td class="xl68">38,40</td>
            <td class="xl68">21,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">PREDATORI GdT</td>
            <td class="xl63">5</td>
            <td class="xl63">1</td>
            <td class="xl63">6</td>
            <td class="xl66">0,833</td>
            <td class="xl67">121</td>
            <td class="xl67">178</td>
            <td class="xl67">57</td>
            <td class="xl68">35,60</td>
            <td class="xl68">11,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">WOLVERINES Piacenza</td>
            <td class="xl63">3</td>
            <td class="xl63">3</td>
            <td class="xl63">6</td>
            <td class="xl66">0,500</td>
            <td class="xl67">-16</td>
            <td class="xl67">162</td>
            <td class="xl67">178</td>
            <td class="xl68">27,00</td>
            <td class="xl68">29,67</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">LANCIERI Novara</td>
            <td class="xl63">2</td>
            <td class="xl63">4</td>
            <td class="xl63">6</td>
            <td class="xl66">0,333</td>
            <td class="xl67">-2</td>
            <td class="xl67">100</td>
            <td class="xl67">102</td>
            <td class="xl68">20,00</td>
            <td class="xl68">20,40</td>
            </tr>
            <tr>
            <td class="xl63" height="26">5</td>
            <td class="xl64">FROGS Legnano</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-190</td>
            <td class="xl67">36</td>
            <td class="xl67">226</td>
            <td class="xl68">7,20</td>
            <td class="xl68">45,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26"></td>
            <td class="xl69"></td>
            <td class="xl63"></td>
            <td class="xl63"></td>
            <td class="xl65"></td>
            <td class="xl66"></td>
            <td class="xl67"></td>
            <td class="xl67"></td>
            <td class="xl63"></td>
            <td class="xl68"></td>
            <td class="xl68"></td>
            </tr>
            <tr>
            <th></th>
            <th>GIRONE L</th>
            <th>W</th>
            <th>L</th>
            <th>G</th>
            <th>Pct</th>
            <th>Diff</th>
            <th>PF</th>
            <th>PA</th>
            <th>Off</th>
            <th>Def</th>
            </tr>
            <tr>
            <td class="xl63" height="26">1</td>
            <td class="xl64">PIRATES Savona</td>
            <td class="xl63">6</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl66">1,000</td>
            <td class="xl67">105</td>
            <td class="xl67">169</td>
            <td class="xl67">64</td>
            <td class="xl68">33,80</td>
            <td class="xl68">12,80</td>
            </tr>
            <tr>
            <td class="xl63" height="26">2</td>
            <td class="xl64">VIKINGS Cavallermaggiore</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">109</td>
            <td class="xl67">175</td>
            <td class="xl67">66</td>
            <td class="xl68">35,00</td>
            <td class="xl68">13,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">3</td>
            <td class="xl64">RAZORBACKS Piemonte</td>
            <td class="xl63">4</td>
            <td class="xl63">2</td>
            <td class="xl63">6</td>
            <td class="xl66">0,667</td>
            <td class="xl67">88</td>
            <td class="xl67">160</td>
            <td class="xl67">72</td>
            <td class="xl68">26,67</td>
            <td class="xl68">12,00</td>
            </tr>
            <tr>
            <td class="xl63" height="26">4</td>
            <td class="xl64">BLITZ Balangero</td>
            <td class="xl63">1</td>
            <td class="xl63">5</td>
            <td class="xl63">6</td>
            <td class="xl66">0,167</td>
            <td class="xl67">-95</td>
            <td class="xl67">66</td>
            <td class="xl67">161</td>
            <td class="xl68">13,20</td>
            <td class="xl68">32,20</td>
            </tr>
            <tr>
            <td class="xl63" height="26">5</td>
            <td class="xl64">ALFIERI Asti</td>
            <td class="xl63">0</td>
            <td class="xl63">6</td>
            <td class="xl63">6</td>
            <td class="xl66">0,000</td>
            <td class="xl67">-207</td>
            <td class="xl67">12</td>
            <td class="xl67">219</td>
            <td class="xl68">2,40</td>
            <td class="xl68">43,80</td>
            </tr>
            </tbody>
            </table>';

        $classifica = array();
        $prime = array();
        $seconde = array();
        $terze = array();

        $geo = array(
            'SIRBONS Cagliari' => '0',
            'CRUSADERS Cagliari' => '1',
            'THUNDERS Trento' => '2',
            'DRAGHI Udine' => '3',
            'LEONI Basiliano' => '4',
            '29ERS Alto Livenza' => '5',
            'MEXICANS Pederobba' => '6',
            'MULI Trieste' => '7',
            'FROGS Legnano' => '8',
            'HURRICANES Vicenza' => '9',
            'RAMS Milano' => '10',
            'LANCIERI Novara' => '11',
            'REDSKINS Verona' => '12',
            'ISLANDERS Venezia' => '13',
            'BLITZ Balangero' => '14',
            'ALLIGATORS Rovigo' => '15',
            'RAZORBACKS Piemonte' => '16',
            'WOLVERINES Piacenza' => '17',
            'ALFIERI Asti' => '18',
            'VIKINGS Cavallermaggiore' => '19',
            'BUCCANEERS Comacchio' => '20',
            'DOVES Bologna' => '21',
            'CHIEFS Ravenna' => '22',
            'RAVENS Imola' => '23',
            'PREDATORI GdT' => '24',
            'PIRATES Savona' => '25',
            'TITANS Broncos' => '26',
            'ANGELS Pesaro' => '27',
            'RAIDERS West Coast' => '28',
            'TRAPPERS Cecina' => '29',
            'GRIFONI Perugia' => '30',
            'VETERANS Grosseto' => '31',
            'LEGIO XIII Roma' => '32',
            'MINATORI Roma Sud' => '33',
            'FIGHTING DUCKS Roma' => '34',
            'MAD BULLS Barletta' => '35',
            'NAVY SEALS Bari' => '36',
            'BRIGANTI Napoli' => '37',
            '82ERS Napoli' => '38',
            'EAGLES Salerno' => '39',
            'ACHEI Crotone' => '40',
            'ELEPHANTS Catania' => '41',
        );

        $pesi_gironi = array(
            1 => 13.75,
            2 => 20.00,
            3 => 18.25,
            4 => 21.00,
            5 => 18.00,
            6 => 19.75,
            7 => 25.00,
            8 => 21.50,
            9 => 17.40,
            10 => 35.60,
        );

        if(isset($_REQUEST['prevision']) && ($_REQUEST['prevision'] == 'win' || $_REQUEST['prevision'] == 'lose'))
            $standings = $prevision;
        else
            $standings = file_get_contents('https://www.terzadivisione.com/2019-standings/');
        
        $standings = explode('<table', $standings);
        $standings = explode('</table>', $standings[1]);
        $standings = explode('GIRONE ', $standings[0]);

        $i = 1;
        unset($standings[0]);

        foreach ($standings as $k1 => $v1) {

            $data = explode('<tr>', $v1);

            $team = explode('</td>', $data[1]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $prime[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

            $team = explode('</td>', $data[2]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $seconde[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

            $team = explode('</td>', $data[3]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $terze[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

        }

        $geo_division = array();

        arsort($prime);
        arsort($seconde);
        arsort($terze);

        foreach ($prime as $key => $value) {
            $geo_division[$key] = $geo[$key];
        }
        foreach ($seconde as $key => $value) {
            $geo_division[$key] = $geo[$key];
        }
        $i = 0;
        foreach ($terze as $key => $value) {
            $i++;
            $geo_division[$key] = $geo[$key];
            if($i > 3)
                break;
        }

        asort($geo_division);

        list($nord, $sud) = array_chunk($geo_division, 12, true);

        $ts_nord = array();
        $ts_sud = array();

        foreach ($prime as $key => $value) {
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
        }
        foreach ($seconde as $key => $value) {
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
        }
        $i = 0;
        foreach ($terze as $key => $value) {
            $i++;
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
            if($i > 3)
                break;
        }

        return view('pages.grid', ['nord' => $ts_nord, 'sud' => $ts_sud]);
    }
}
