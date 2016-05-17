<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetActivityFullActivityMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getActivityFullActivity';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse($data)
    {
        return $this->getSerializer()->deserialize('
<RESPONSE>
	<META>
		<STATUSCODE>200</STATUSCODE>
		<MESSAGE>OK : View successfully calculated</MESSAGE>
	</META>
        <ACTIVITY>
            <ID>4156d454efd9e4480be7</ID>
            <USERID>2f162e27d205045020fc</USERID>
            <SPORTID>168</SPORTID>
            <DEVICEID></DEVICEID>
            <DEVICEMODELID></DEVICEMODELID>
            <STARTDATE>2016-04-04 09:53:00</STARTDATE>
            <TIMEZONE>+02:00</TIMEZONE>
            <DURATION>3600</DURATION>
            <LIBELLE>ONmove 200 - 04/04/2016</LIBELLE>
            <COMMENT></COMMENT>
            <LATITUDE>46.39100266</LATITUDE>
            <LONGITUDE>4.80462313</LONGITUDE>
            <ELEVATION>0</ELEVATION>
            <TRACKID>565801618fd666f7a395</TRACKID>
            <SESSION_TOKEN></SESSION_TOKEN>
            <SHARE_TOKEN>E702KAbgo5</SHARE_TOKEN>
                        <MANUAL>1</MANUAL>
            <CREATEDAT>2016-04-04 12:15:03</CREATEDAT>
            <UPDATETIME>2016-04-04 12:16:44</UPDATETIME>
                        	<ABOUT>
		<TRACK>1</TRACK>
		<DATASTREAM>1</DATASTREAM>
		<LAP>0</LAP>
		<ELEVATION>1</ELEVATION>
		<HEARTRATE>0</HEARTRATE>
		<SPEED>1</SPEED>
		<CHALLENGE>0</CHALLENGE>
	</ABOUT>
            <TAGS>
                        </TAGS>
                <DATASUMMARY>
                                                                                                            <VALUE id="5">22334</VALUE>
                                            <VALUE id="7">9980</VALUE>
                                            <VALUE id="9">6230</VALUE>
                                            <VALUE id="24">3600</VALUE>
                                            <VALUE id="23">1478</VALUE>
                                                                    <VALUE id="18">99</VALUE>
                                            <VALUE id="19">73</VALUE>
                                                        <VALUE id="99">881</VALUE>
                                            <VALUE id="97">881</VALUE>
                </DATASUMMARY>            <DATASTREAM>
            <MEASURE elapsed_time="10">
        <VALUE id="6">3560</VALUE>
        <VALUE id="23">0</VALUE>
        <VALUE id="5">9</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="15">
        <VALUE id="6">4790</VALUE>
        <VALUE id="23">0</VALUE>
        <VALUE id="5">18</VALUE>
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="20">
        <VALUE id="6">5650</VALUE>
        <VALUE id="23">0</VALUE>
        <VALUE id="5">29</VALUE>
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="30">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">2</VALUE>
        <VALUE id="5">48</VALUE>
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="35">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">2</VALUE>
        <VALUE id="5">56</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="40">
        <VALUE id="6">6770</VALUE>
        <VALUE id="23">3</VALUE>
        <VALUE id="5">66</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="50">
        <VALUE id="6">6570</VALUE>
        <VALUE id="23">4</VALUE>
        <VALUE id="5">83</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="55">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">5</VALUE>
        <VALUE id="5">90</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="60">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">5</VALUE>
        <VALUE id="5">99</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="65">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">6</VALUE>
        <VALUE id="5">107</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="75">
        <VALUE id="6">5960</VALUE>
        <VALUE id="23">7</VALUE>
        <VALUE id="5">125</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="80">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">7</VALUE>
        <VALUE id="5">133</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="85">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">8</VALUE>
        <VALUE id="5">141</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="95">
        <VALUE id="6">6310</VALUE>
        <VALUE id="23">9</VALUE>
        <VALUE id="5">161</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="100">
        <VALUE id="6">6440</VALUE>
        <VALUE id="23">10</VALUE>
        <VALUE id="5">167</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="105">
        <VALUE id="6">6110</VALUE>
        <VALUE id="23">10</VALUE>
        <VALUE id="5">175</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="110">
        <VALUE id="6">5670</VALUE>
        <VALUE id="23">11</VALUE>
        <VALUE id="5">184</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="120">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">12</VALUE>
        <VALUE id="5">201</VALUE>
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="125">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">13</VALUE>
        <VALUE id="5">211</VALUE>
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="130">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">13</VALUE>
        <VALUE id="5">220</VALUE>
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="140">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">14</VALUE>
        <VALUE id="5">236</VALUE>
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="145">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">15</VALUE>
        <VALUE id="5">245</VALUE>
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="150">
        <VALUE id="6">6090</VALUE>
        <VALUE id="23">16</VALUE>
        <VALUE id="5">254</VALUE>
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="155">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">16</VALUE>
        <VALUE id="5">264</VALUE>
        <VALUE id="14">232</VALUE>
    </MEASURE>
<MEASURE elapsed_time="165">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">17</VALUE>
        <VALUE id="5">280</VALUE>
        <VALUE id="14">232</VALUE>
    </MEASURE>
<MEASURE elapsed_time="170">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">18</VALUE>
        <VALUE id="5">290</VALUE>
        <VALUE id="14">231</VALUE>
    </MEASURE>
<MEASURE elapsed_time="175">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">18</VALUE>
        <VALUE id="5">298</VALUE>
        <VALUE id="14">231</VALUE>
    </MEASURE>
<MEASURE elapsed_time="185">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">20</VALUE>
        <VALUE id="5">315</VALUE>
        <VALUE id="14">230</VALUE>
    </MEASURE>
<MEASURE elapsed_time="190">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">20</VALUE>
        <VALUE id="5">324</VALUE>
        <VALUE id="14">230</VALUE>
    </MEASURE>
<MEASURE elapsed_time="195">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">21</VALUE>
        <VALUE id="5">333</VALUE>
        <VALUE id="14">230</VALUE>
    </MEASURE>
<MEASURE elapsed_time="200">
        <VALUE id="6">6220</VALUE>
        <VALUE id="23">21</VALUE>
        <VALUE id="5">340</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="210">
        <VALUE id="6">5980</VALUE>
        <VALUE id="23">22</VALUE>
        <VALUE id="5">357</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="215">
        <VALUE id="6">5980</VALUE>
        <VALUE id="23">23</VALUE>
        <VALUE id="5">366</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="220">
        <VALUE id="6">6030</VALUE>
        <VALUE id="23">23</VALUE>
        <VALUE id="5">374</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="230">
        <VALUE id="6">5840</VALUE>
        <VALUE id="23">25</VALUE>
        <VALUE id="5">390</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="235">
        <VALUE id="6">5890</VALUE>
        <VALUE id="23">25</VALUE>
        <VALUE id="5">399</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="240">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">26</VALUE>
        <VALUE id="5">408</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="245">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">26</VALUE>
        <VALUE id="5">417</VALUE>
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="255">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">27</VALUE>
        <VALUE id="5">438</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="260">
        <VALUE id="6">6960</VALUE>
        <VALUE id="23">28</VALUE>
        <VALUE id="5">447</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="265">
        <VALUE id="6">6980</VALUE>
        <VALUE id="23">29</VALUE>
        <VALUE id="5">457</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="275">
        <VALUE id="6">6870</VALUE>
        <VALUE id="23">30</VALUE>
        <VALUE id="5">476</VALUE>
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="280">
        <VALUE id="6">6950</VALUE>
        <VALUE id="23">31</VALUE>
        <VALUE id="5">485</VALUE>
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="285">
        <VALUE id="6">6760</VALUE>
        <VALUE id="23">31</VALUE>
        <VALUE id="5">492</VALUE>
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="295">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">33</VALUE>
        <VALUE id="5">508</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="300">
        <VALUE id="6">5790</VALUE>
        <VALUE id="23">33</VALUE>
        <VALUE id="5">517</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="305">
        <VALUE id="6">5880</VALUE>
        <VALUE id="23">34</VALUE>
        <VALUE id="5">526</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="310">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">34</VALUE>
        <VALUE id="5">535</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="320">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">35</VALUE>
        <VALUE id="5">553</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="325">
        <VALUE id="6">6390</VALUE>
        <VALUE id="23">36</VALUE>
        <VALUE id="5">561</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="330">
        <VALUE id="6">6220</VALUE>
        <VALUE id="23">37</VALUE>
        <VALUE id="5">569</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="340">
        <VALUE id="6">6090</VALUE>
        <VALUE id="23">38</VALUE>
        <VALUE id="5">586</VALUE>
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="345">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">38</VALUE>
        <VALUE id="5">595</VALUE>
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="350">
        <VALUE id="6">6030</VALUE>
        <VALUE id="23">39</VALUE>
        <VALUE id="5">603</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="355">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">39</VALUE>
        <VALUE id="5">611</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="365">
        <VALUE id="6">5480</VALUE>
        <VALUE id="23">40</VALUE>
        <VALUE id="5">623</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="370">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">40</VALUE>
        <VALUE id="5">631</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="375">
        <VALUE id="6">6220</VALUE>
        <VALUE id="23">41</VALUE>
        <VALUE id="5">641</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="385">
        <VALUE id="6">6570</VALUE>
        <VALUE id="23">42</VALUE>
        <VALUE id="5">659</VALUE>
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="390">
        <VALUE id="6">6540</VALUE>
        <VALUE id="23">43</VALUE>
        <VALUE id="5">668</VALUE>
        <VALUE id="14">209</VALUE>
    </MEASURE>
<MEASURE elapsed_time="395">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">43</VALUE>
        <VALUE id="5">676</VALUE>
        <VALUE id="14">208</VALUE>
    </MEASURE>
<MEASURE elapsed_time="400">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">44</VALUE>
        <VALUE id="5">684</VALUE>
        <VALUE id="14">208</VALUE>
    </MEASURE>
<MEASURE elapsed_time="410">
        <VALUE id="6">5910</VALUE>
        <VALUE id="23">45</VALUE>
        <VALUE id="5">701</VALUE>
        <VALUE id="14">207</VALUE>
    </MEASURE>
<MEASURE elapsed_time="415">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">46</VALUE>
        <VALUE id="5">709</VALUE>
        <VALUE id="14">206</VALUE>
    </MEASURE>
<MEASURE elapsed_time="420">
        <VALUE id="6">6260</VALUE>
        <VALUE id="23">46</VALUE>
        <VALUE id="5">717</VALUE>
        <VALUE id="14">206</VALUE>
    </MEASURE>
<MEASURE elapsed_time="430">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">47</VALUE>
        <VALUE id="5">734</VALUE>
        <VALUE id="14">205</VALUE>
    </MEASURE>
<MEASURE elapsed_time="435">
        <VALUE id="6">6110</VALUE>
        <VALUE id="23">48</VALUE>
        <VALUE id="5">743</VALUE>
        <VALUE id="14">204</VALUE>
    </MEASURE>
<MEASURE elapsed_time="440">
        <VALUE id="6">6110</VALUE>
        <VALUE id="23">48</VALUE>
        <VALUE id="5">752</VALUE>
        <VALUE id="14">204</VALUE>
    </MEASURE>
<MEASURE elapsed_time="445">
        <VALUE id="6">6170</VALUE>
        <VALUE id="23">49</VALUE>
        <VALUE id="5">760</VALUE>
        <VALUE id="14">203</VALUE>
    </MEASURE>
<MEASURE elapsed_time="455">
        <VALUE id="6">6400</VALUE>
        <VALUE id="23">50</VALUE>
        <VALUE id="5">778</VALUE>
        <VALUE id="14">202</VALUE>
    </MEASURE>
<MEASURE elapsed_time="460">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">51</VALUE>
        <VALUE id="5">786</VALUE>
        <VALUE id="14">202</VALUE>
    </MEASURE>
<MEASURE elapsed_time="465">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">51</VALUE>
        <VALUE id="5">795</VALUE>
        <VALUE id="14">201</VALUE>
    </MEASURE>
<MEASURE elapsed_time="475">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">52</VALUE>
        <VALUE id="5">813</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="480">
        <VALUE id="6">6410</VALUE>
        <VALUE id="23">53</VALUE>
        <VALUE id="5">823</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="485">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">54</VALUE>
        <VALUE id="5">830</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="490">
        <VALUE id="6">6250</VALUE>
        <VALUE id="23">54</VALUE>
        <VALUE id="5">837</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="500">
        <VALUE id="6">5330</VALUE>
        <VALUE id="23">55</VALUE>
        <VALUE id="5">852</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="505">
        <VALUE id="6">5320</VALUE>
        <VALUE id="23">56</VALUE>
        <VALUE id="5">859</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="510">
        <VALUE id="6">5320</VALUE>
        <VALUE id="23">56</VALUE>
        <VALUE id="5">867</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="520">
        <VALUE id="6">5700</VALUE>
        <VALUE id="23">57</VALUE>
        <VALUE id="5">884</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="525">
        <VALUE id="6">5820</VALUE>
        <VALUE id="23">58</VALUE>
        <VALUE id="5">892</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="530">
        <VALUE id="6">5880</VALUE>
        <VALUE id="23">58</VALUE>
        <VALUE id="5">900</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="535">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">59</VALUE>
        <VALUE id="5">911</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="545">
        <VALUE id="6">6630</VALUE>
        <VALUE id="23">60</VALUE>
        <VALUE id="5">929</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="550">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">60</VALUE>
        <VALUE id="5">939</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="555">
        <VALUE id="6">6870</VALUE>
        <VALUE id="23">61</VALUE>
        <VALUE id="5">948</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="565">
        <VALUE id="6">6840</VALUE>
        <VALUE id="23">62</VALUE>
        <VALUE id="5">967</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="570">
        <VALUE id="6">6710</VALUE>
        <VALUE id="23">63</VALUE>
        <VALUE id="5">976</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="575">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">64</VALUE>
        <VALUE id="5">985</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="585">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">65</VALUE>
        <VALUE id="5">1003</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="590">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">66</VALUE>
        <VALUE id="5">1012</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="595">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">66</VALUE>
        <VALUE id="5">1021</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="600">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">67</VALUE>
        <VALUE id="5">1029</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="610">
        <VALUE id="6">6190</VALUE>
        <VALUE id="23">68</VALUE>
        <VALUE id="5">1047</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="615">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">69</VALUE>
        <VALUE id="5">1056</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="620">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">69</VALUE>
        <VALUE id="5">1066</VALUE>
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="630">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">70</VALUE>
        <VALUE id="5">1083</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="635">
        <VALUE id="6">6400</VALUE>
        <VALUE id="23">71</VALUE>
        <VALUE id="5">1091</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="640">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">72</VALUE>
        <VALUE id="5">1100</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="645">
        <VALUE id="6">6190</VALUE>
        <VALUE id="23">72</VALUE>
        <VALUE id="5">1109</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="655">
        <VALUE id="6">6030</VALUE>
        <VALUE id="23">73</VALUE>
        <VALUE id="5">1125</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="660">
        <VALUE id="6">5880</VALUE>
        <VALUE id="23">74</VALUE>
        <VALUE id="5">1133</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="665">
        <VALUE id="6">5790</VALUE>
        <VALUE id="23">74</VALUE>
        <VALUE id="5">1141</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="675">
        <VALUE id="6">5890</VALUE>
        <VALUE id="23">75</VALUE>
        <VALUE id="5">1157</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="680">
        <VALUE id="6">5930</VALUE>
        <VALUE id="23">76</VALUE>
        <VALUE id="5">1166</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="685">
        <VALUE id="6">6020</VALUE>
        <VALUE id="23">76</VALUE>
        <VALUE id="5">1175</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="690">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">77</VALUE>
        <VALUE id="5">1183</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="700">
        <VALUE id="6">5430</VALUE>
        <VALUE id="23">78</VALUE>
        <VALUE id="5">1195</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="705">
        <VALUE id="6">4920</VALUE>
        <VALUE id="23">79</VALUE>
        <VALUE id="5">1202</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="710">
        <VALUE id="6">4930</VALUE>
        <VALUE id="23">79</VALUE>
        <VALUE id="5">1209</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="720">
        <VALUE id="6">5020</VALUE>
        <VALUE id="23">80</VALUE>
        <VALUE id="5">1224</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="725">
        <VALUE id="6">5340</VALUE>
        <VALUE id="23">80</VALUE>
        <VALUE id="5">1234</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="730">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">81</VALUE>
        <VALUE id="5">1243</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="735">
        <VALUE id="6">6300</VALUE>
        <VALUE id="23">81</VALUE>
        <VALUE id="5">1251</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="745">
        <VALUE id="6">5890</VALUE>
        <VALUE id="23">82</VALUE>
        <VALUE id="5">1268</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="750">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">83</VALUE>
        <VALUE id="5">1277</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="755">
        <VALUE id="6">6250</VALUE>
        <VALUE id="23">83</VALUE>
        <VALUE id="5">1285</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="765">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">85</VALUE>
        <VALUE id="5">1303</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="770">
        <VALUE id="6">6320</VALUE>
        <VALUE id="23">85</VALUE>
        <VALUE id="5">1313</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="775">
        <VALUE id="6">6730</VALUE>
        <VALUE id="23">86</VALUE>
        <VALUE id="5">1323</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="780">
        <VALUE id="6">6950</VALUE>
        <VALUE id="23">86</VALUE>
        <VALUE id="5">1332</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="790">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">88</VALUE>
        <VALUE id="5">1349</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="795">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">88</VALUE>
        <VALUE id="5">1358</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="800">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">89</VALUE>
        <VALUE id="5">1365</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="810">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">90</VALUE>
        <VALUE id="5">1383</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="815">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">91</VALUE>
        <VALUE id="5">1392</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="820">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">91</VALUE>
        <VALUE id="5">1399</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="825">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">92</VALUE>
        <VALUE id="5">1407</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="835">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">93</VALUE>
        <VALUE id="5">1426</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="840">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">93</VALUE>
        <VALUE id="5">1435</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="845">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">94</VALUE>
        <VALUE id="5">1444</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="855">
        <VALUE id="6">6090</VALUE>
        <VALUE id="23">95</VALUE>
        <VALUE id="5">1459</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="860">
        <VALUE id="6">5720</VALUE>
        <VALUE id="23">96</VALUE>
        <VALUE id="5">1466</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="865">
        <VALUE id="6">5680</VALUE>
        <VALUE id="23">96</VALUE>
        <VALUE id="5">1476</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="875">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">97</VALUE>
        <VALUE id="5">1497</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="880">
        <VALUE id="6">7130</VALUE>
        <VALUE id="23">98</VALUE>
        <VALUE id="5">1507</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="885">
        <VALUE id="6">7400</VALUE>
        <VALUE id="23">99</VALUE>
        <VALUE id="5">1515</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="890">
        <VALUE id="6">6910</VALUE>
        <VALUE id="23">99</VALUE>
        <VALUE id="5">1523</VALUE>
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="900">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">101</VALUE>
        <VALUE id="5">1541</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="905">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">101</VALUE>
        <VALUE id="5">1549</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="910">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">102</VALUE>
        <VALUE id="5">1558</VALUE>
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="920">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">103</VALUE>
        <VALUE id="5">1576</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="925">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">103</VALUE>
        <VALUE id="5">1586</VALUE>
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="930">
        <VALUE id="6">6650</VALUE>
        <VALUE id="23">104</VALUE>
        <VALUE id="5">1595</VALUE>
        <VALUE id="14">201</VALUE>
    </MEASURE>
<MEASURE elapsed_time="935">
        <VALUE id="6">6760</VALUE>
        <VALUE id="23">105</VALUE>
        <VALUE id="5">1605</VALUE>
        <VALUE id="14">202</VALUE>
    </MEASURE>
<MEASURE elapsed_time="945">
        <VALUE id="6">6540</VALUE>
        <VALUE id="23">106</VALUE>
        <VALUE id="5">1621</VALUE>
        <VALUE id="14">202</VALUE>
    </MEASURE>
<MEASURE elapsed_time="950">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">107</VALUE>
        <VALUE id="5">1630</VALUE>
        <VALUE id="14">203</VALUE>
    </MEASURE>
<MEASURE elapsed_time="955">
        <VALUE id="6">5960</VALUE>
        <VALUE id="23">107</VALUE>
        <VALUE id="5">1638</VALUE>
        <VALUE id="14">203</VALUE>
    </MEASURE>
<MEASURE elapsed_time="965">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">108</VALUE>
        <VALUE id="5">1654</VALUE>
        <VALUE id="14">204</VALUE>
    </MEASURE>
<MEASURE elapsed_time="970">
        <VALUE id="6">5890</VALUE>
        <VALUE id="23">109</VALUE>
        <VALUE id="5">1662</VALUE>
        <VALUE id="14">205</VALUE>
    </MEASURE>
<MEASURE elapsed_time="975">
        <VALUE id="6">5750</VALUE>
        <VALUE id="23">109</VALUE>
        <VALUE id="5">1670</VALUE>
        <VALUE id="14">205</VALUE>
    </MEASURE>
<MEASURE elapsed_time="980">
        <VALUE id="6">5660</VALUE>
        <VALUE id="23">110</VALUE>
        <VALUE id="5">1679</VALUE>
        <VALUE id="14">206</VALUE>
    </MEASURE>
<MEASURE elapsed_time="990">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">111</VALUE>
        <VALUE id="5">1695</VALUE>
        <VALUE id="14">206</VALUE>
    </MEASURE>
<MEASURE elapsed_time="995">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">111</VALUE>
        <VALUE id="5">1703</VALUE>
        <VALUE id="14">207</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1000">
        <VALUE id="6">5710</VALUE>
        <VALUE id="23">112</VALUE>
        <VALUE id="5">1711</VALUE>
        <VALUE id="14">207</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1010">
        <VALUE id="6">5870</VALUE>
        <VALUE id="23">113</VALUE>
        <VALUE id="5">1728</VALUE>
        <VALUE id="14">208</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1015">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">113</VALUE>
        <VALUE id="5">1735</VALUE>
        <VALUE id="14">208</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1020">
        <VALUE id="6">5690</VALUE>
        <VALUE id="23">114</VALUE>
        <VALUE id="5">1743</VALUE>
        <VALUE id="14">209</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1025">
        <VALUE id="6">5510</VALUE>
        <VALUE id="23">115</VALUE>
        <VALUE id="5">1751</VALUE>
        <VALUE id="14">209</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1035">
        <VALUE id="6">5670</VALUE>
        <VALUE id="23">116</VALUE>
        <VALUE id="5">1767</VALUE>
        <VALUE id="14">209</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1040">
        <VALUE id="6">5870</VALUE>
        <VALUE id="23">116</VALUE>
        <VALUE id="5">1776</VALUE>
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1045">
        <VALUE id="6">5930</VALUE>
        <VALUE id="23">117</VALUE>
        <VALUE id="5">1784</VALUE>
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1055">
        <VALUE id="6">5930</VALUE>
        <VALUE id="23">118</VALUE>
        <VALUE id="5">1801</VALUE>
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1060">
        <VALUE id="6">6020</VALUE>
        <VALUE id="23">118</VALUE>
        <VALUE id="5">1809</VALUE>
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1065">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">119</VALUE>
        <VALUE id="5">1818</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1070">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">119</VALUE>
        <VALUE id="5">1826</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1080">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">120</VALUE>
        <VALUE id="5">1844</VALUE>
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1085">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">121</VALUE>
        <VALUE id="5">1852</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1090">
        <VALUE id="6">6020</VALUE>
        <VALUE id="23">122</VALUE>
        <VALUE id="5">1860</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1100">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">123</VALUE>
        <VALUE id="5">1878</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1105">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">123</VALUE>
        <VALUE id="5">1886</VALUE>
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1110">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">124</VALUE>
        <VALUE id="5">1895</VALUE>
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1115">
        <VALUE id="6">6110</VALUE>
        <VALUE id="23">124</VALUE>
        <VALUE id="5">1903</VALUE>
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1125">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">125</VALUE>
        <VALUE id="5">1921</VALUE>
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1130">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">126</VALUE>
        <VALUE id="5">1930</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1135">
        <VALUE id="6">6420</VALUE>
        <VALUE id="23">127</VALUE>
        <VALUE id="5">1939</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1145">
        <VALUE id="6">6190</VALUE>
        <VALUE id="23">128</VALUE>
        <VALUE id="5">1955</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1150">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">128</VALUE>
        <VALUE id="5">1963</VALUE>
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1155">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">129</VALUE>
        <VALUE id="5">1972</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1165">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">130</VALUE>
        <VALUE id="5">1989</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1170">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">131</VALUE>
        <VALUE id="5">1997</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1175">
        <VALUE id="6">5980</VALUE>
        <VALUE id="23">131</VALUE>
        <VALUE id="5">2006</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1180">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">132</VALUE>
        <VALUE id="5">2016</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1190">
        <VALUE id="6">6440</VALUE>
        <VALUE id="23">133</VALUE>
        <VALUE id="5">2032</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1195">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">133</VALUE>
        <VALUE id="5">2040</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1200">
        <VALUE id="6">6070</VALUE>
        <VALUE id="23">134</VALUE>
        <VALUE id="5">2050</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1210">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">135</VALUE>
        <VALUE id="5">2068</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1215">
        <VALUE id="6">6400</VALUE>
        <VALUE id="23">136</VALUE>
        <VALUE id="5">2077</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1220">
        <VALUE id="6">6540</VALUE>
        <VALUE id="23">136</VALUE>
        <VALUE id="5">2087</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1225">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">137</VALUE>
        <VALUE id="5">2095</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1235">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">138</VALUE>
        <VALUE id="5">2111</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1240">
        <VALUE id="6">5950</VALUE>
        <VALUE id="23">139</VALUE>
        <VALUE id="5">2119</VALUE>
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1245">
        <VALUE id="6">5900</VALUE>
        <VALUE id="23">139</VALUE>
        <VALUE id="5">2128</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1255">
        <VALUE id="6">6270</VALUE>
        <VALUE id="23">140</VALUE>
        <VALUE id="5">2146</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1260">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">141</VALUE>
        <VALUE id="5">2156</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1265">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">142</VALUE>
        <VALUE id="5">2164</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1270">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">142</VALUE>
        <VALUE id="5">2173</VALUE>
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1280">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">143</VALUE>
        <VALUE id="5">2190</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1285">
        <VALUE id="6">5980</VALUE>
        <VALUE id="23">144</VALUE>
        <VALUE id="5">2197</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1290">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">144</VALUE>
        <VALUE id="5">2206</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1300">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">146</VALUE>
        <VALUE id="5">2225</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1305">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">146</VALUE>
        <VALUE id="5">2234</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1310">
        <VALUE id="6">6380</VALUE>
        <VALUE id="23">147</VALUE>
        <VALUE id="5">2241</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1315">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">147</VALUE>
        <VALUE id="5">2250</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1325">
        <VALUE id="6">5690</VALUE>
        <VALUE id="23">148</VALUE>
        <VALUE id="5">2264</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1330">
        <VALUE id="6">5580</VALUE>
        <VALUE id="23">149</VALUE>
        <VALUE id="5">2272</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1335">
        <VALUE id="6">5610</VALUE>
        <VALUE id="23">149</VALUE>
        <VALUE id="5">2281</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1345">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">151</VALUE>
        <VALUE id="5">2301</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1350">
        <VALUE id="6">6560</VALUE>
        <VALUE id="23">151</VALUE>
        <VALUE id="5">2309</VALUE>
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1355">
        <VALUE id="6">6570</VALUE>
        <VALUE id="23">152</VALUE>
        <VALUE id="5">2318</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1360">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">152</VALUE>
        <VALUE id="5">2326</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1370">
        <VALUE id="6">5920</VALUE>
        <VALUE id="23">153</VALUE>
        <VALUE id="5">2339</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1375">
        <VALUE id="6">5300</VALUE>
        <VALUE id="23">154</VALUE>
        <VALUE id="5">2347</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1380">
        <VALUE id="6">5080</VALUE>
        <VALUE id="23">154</VALUE>
        <VALUE id="5">2355</VALUE>
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1390">
        <VALUE id="6">5900</VALUE>
        <VALUE id="23">155</VALUE>
        <VALUE id="5">2374</VALUE>
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1395">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">156</VALUE>
        <VALUE id="5">2381</VALUE>
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1400">
        <VALUE id="6">6210</VALUE>
        <VALUE id="23">156</VALUE>
        <VALUE id="5">2389</VALUE>
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1410">
        <VALUE id="6">5620</VALUE>
        <VALUE id="23">158</VALUE>
        <VALUE id="5">2406</VALUE>
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1415">
        <VALUE id="6">5790</VALUE>
        <VALUE id="23">158</VALUE>
        <VALUE id="5">2415</VALUE>
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1420">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">159</VALUE>
        <VALUE id="5">2424</VALUE>
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1425">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">159</VALUE>
        <VALUE id="5">2432</VALUE>
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1435">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">160</VALUE>
        <VALUE id="5">2449</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1440">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">161</VALUE>
        <VALUE id="5">2459</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1445">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">161</VALUE>
        <VALUE id="5">2467</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1455">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">163</VALUE>
        <VALUE id="5">2484</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1460">
        <VALUE id="6">6220</VALUE>
        <VALUE id="23">163</VALUE>
        <VALUE id="5">2492</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1465">
        <VALUE id="6">5900</VALUE>
        <VALUE id="23">164</VALUE>
        <VALUE id="5">2500</VALUE>
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1470">
        <VALUE id="6">5770</VALUE>
        <VALUE id="23">164</VALUE>
        <VALUE id="5">2508</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1480">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">165</VALUE>
        <VALUE id="5">2526</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1485">
        <VALUE id="6">6250</VALUE>
        <VALUE id="23">166</VALUE>
        <VALUE id="5">2535</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1490">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">167</VALUE>
        <VALUE id="5">2542</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1500">
        <VALUE id="6">5670</VALUE>
        <VALUE id="23">168</VALUE>
        <VALUE id="5">2558</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1505">
        <VALUE id="6">5730</VALUE>
        <VALUE id="23">168</VALUE>
        <VALUE id="5">2566</VALUE>
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1510">
        <VALUE id="6">5930</VALUE>
        <VALUE id="23">169</VALUE>
        <VALUE id="5">2575</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1515">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">169</VALUE>
        <VALUE id="5">2584</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1525">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">170</VALUE>
        <VALUE id="5">2599</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1530">
        <VALUE id="6">5780</VALUE>
        <VALUE id="23">171</VALUE>
        <VALUE id="5">2608</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1535">
        <VALUE id="6">5960</VALUE>
        <VALUE id="23">171</VALUE>
        <VALUE id="5">2617</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1545">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">172</VALUE>
        <VALUE id="5">2637</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1550">
        <VALUE id="6">6660</VALUE>
        <VALUE id="23">173</VALUE>
        <VALUE id="5">2646</VALUE>
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1555">
        <VALUE id="6">6710</VALUE>
        <VALUE id="23">174</VALUE>
        <VALUE id="5">2654</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1560">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">174</VALUE>
        <VALUE id="5">2663</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1570">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">176</VALUE>
        <VALUE id="5">2680</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1575">
        <VALUE id="6">6300</VALUE>
        <VALUE id="23">176</VALUE>
        <VALUE id="5">2689</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1580">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">177</VALUE>
        <VALUE id="5">2698</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1590">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">178</VALUE>
        <VALUE id="5">2716</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1595">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">178</VALUE>
        <VALUE id="5">2724</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1600">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">179</VALUE>
        <VALUE id="5">2733</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1605">
        <VALUE id="6">6170</VALUE>
        <VALUE id="23">180</VALUE>
        <VALUE id="5">2741</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1615">
        <VALUE id="6">6090</VALUE>
        <VALUE id="23">181</VALUE>
        <VALUE id="5">2758</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1620">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">181</VALUE>
        <VALUE id="5">2767</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1625">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">182</VALUE>
        <VALUE id="5">2776</VALUE>
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1635">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">183</VALUE>
        <VALUE id="5">2794</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1640">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">184</VALUE>
        <VALUE id="5">2804</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1645">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">184</VALUE>
        <VALUE id="5">2812</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1650">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">185</VALUE>
        <VALUE id="5">2821</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1660">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">186</VALUE>
        <VALUE id="5">2839</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1665">
        <VALUE id="6">6320</VALUE>
        <VALUE id="23">187</VALUE>
        <VALUE id="5">2847</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1670">
        <VALUE id="6">6270</VALUE>
        <VALUE id="23">187</VALUE>
        <VALUE id="5">2856</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1680">
        <VALUE id="6">6030</VALUE>
        <VALUE id="23">188</VALUE>
        <VALUE id="5">2872</VALUE>
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1685">
        <VALUE id="6">5980</VALUE>
        <VALUE id="23">189</VALUE>
        <VALUE id="5">2881</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1690">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">189</VALUE>
        <VALUE id="5">2890</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1700">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">191</VALUE>
        <VALUE id="5">2908</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1705">
        <VALUE id="6">6380</VALUE>
        <VALUE id="23">191</VALUE>
        <VALUE id="5">2916</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1710">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">192</VALUE>
        <VALUE id="5">2923</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1715">
        <VALUE id="6">5820</VALUE>
        <VALUE id="23">192</VALUE>
        <VALUE id="5">2932</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1725">
        <VALUE id="6">5920</VALUE>
        <VALUE id="23">193</VALUE>
        <VALUE id="5">2949</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1730">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">194</VALUE>
        <VALUE id="5">2958</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1735">
        <VALUE id="6">6270</VALUE>
        <VALUE id="23">195</VALUE>
        <VALUE id="5">2968</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1745">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">196</VALUE>
        <VALUE id="5">2985</VALUE>
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1750">
        <VALUE id="6">6300</VALUE>
        <VALUE id="23">196</VALUE>
        <VALUE id="5">2992</VALUE>
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1755">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">197</VALUE>
        <VALUE id="5">3001</VALUE>
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1760">
        <VALUE id="6">5960</VALUE>
        <VALUE id="23">197</VALUE>
        <VALUE id="5">3010</VALUE>
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1770">
        <VALUE id="6">6310</VALUE>
        <VALUE id="23">199</VALUE>
        <VALUE id="5">3028</VALUE>
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1775">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">199</VALUE>
        <VALUE id="5">3037</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1780">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">200</VALUE>
        <VALUE id="5">3045</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1790">
        <VALUE id="6">6010</VALUE>
        <VALUE id="23">201</VALUE>
        <VALUE id="5">3060</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1795">
        <VALUE id="6">5690</VALUE>
        <VALUE id="23">201</VALUE>
        <VALUE id="5">3067</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1800">
        <VALUE id="6">5510</VALUE>
        <VALUE id="23">202</VALUE>
        <VALUE id="5">3077</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1805">
        <VALUE id="6">5940</VALUE>
        <VALUE id="23">202</VALUE>
        <VALUE id="5">3086</VALUE>
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1815">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">204</VALUE>
        <VALUE id="5">3104</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1820">
        <VALUE id="6">6340</VALUE>
        <VALUE id="23">204</VALUE>
        <VALUE id="5">3113</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1825">
        <VALUE id="6">6410</VALUE>
        <VALUE id="23">205</VALUE>
        <VALUE id="5">3122</VALUE>
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1835">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">206</VALUE>
        <VALUE id="5">3138</VALUE>
        <VALUE id="14">230</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1840">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">207</VALUE>
        <VALUE id="5">3147</VALUE>
        <VALUE id="14">231</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1845">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">207</VALUE>
        <VALUE id="5">3156</VALUE>
        <VALUE id="14">231</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1850">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">208</VALUE>
        <VALUE id="5">3164</VALUE>
        <VALUE id="14">232</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1860">
        <VALUE id="6">5630</VALUE>
        <VALUE id="23">209</VALUE>
        <VALUE id="5">3179</VALUE>
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1865">
        <VALUE id="6">5580</VALUE>
        <VALUE id="23">209</VALUE>
        <VALUE id="5">3187</VALUE>
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1870">
        <VALUE id="6">5610</VALUE>
        <VALUE id="23">210</VALUE>
        <VALUE id="5">3195</VALUE>
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1880">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">211</VALUE>
        <VALUE id="5">3212</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1885">
        <VALUE id="6">5830</VALUE>
        <VALUE id="23">211</VALUE>
        <VALUE id="5">3218</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1890">
        <VALUE id="6">5550</VALUE>
        <VALUE id="23">212</VALUE>
        <VALUE id="5">3227</VALUE>
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1895">
        <VALUE id="6">5680</VALUE>
        <VALUE id="23">212</VALUE>
        <VALUE id="5">3236</VALUE>
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1905">
        <VALUE id="6">6150</VALUE>
        <VALUE id="23">213</VALUE>
        <VALUE id="5">3254</VALUE>
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1910">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">214</VALUE>
        <VALUE id="5">3265</VALUE>
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1915">
        <VALUE id="6">6900</VALUE>
        <VALUE id="23">215</VALUE>
        <VALUE id="5">3275</VALUE>
        <VALUE id="14">238</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1925">
        <VALUE id="6">6960</VALUE>
        <VALUE id="23">216</VALUE>
        <VALUE id="5">3293</VALUE>
        <VALUE id="14">239</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1930">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">217</VALUE>
        <VALUE id="5">3303</VALUE>
        <VALUE id="14">239</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1935">
        <VALUE id="6">6600</VALUE>
        <VALUE id="23">217</VALUE>
        <VALUE id="5">3311</VALUE>
        <VALUE id="14">240</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1940">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">218</VALUE>
        <VALUE id="5">3320</VALUE>
        <VALUE id="14">240</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1950">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">219</VALUE>
        <VALUE id="5">3336</VALUE>
        <VALUE id="14">241</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1955">
        <VALUE id="6">5760</VALUE>
        <VALUE id="23">220</VALUE>
        <VALUE id="5">3341</VALUE>
        <VALUE id="14">241</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1960">
        <VALUE id="6">5110</VALUE>
        <VALUE id="23">220</VALUE>
        <VALUE id="5">3349</VALUE>
        <VALUE id="14">242</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1970">
        <VALUE id="6">5470</VALUE>
        <VALUE id="23">221</VALUE>
        <VALUE id="5">3366</VALUE>
        <VALUE id="14">242</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1975">
        <VALUE id="6">5800</VALUE>
        <VALUE id="23">221</VALUE>
        <VALUE id="5">3375</VALUE>
        <VALUE id="14">243</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1980">
        <VALUE id="6">6260</VALUE>
        <VALUE id="23">222</VALUE>
        <VALUE id="5">3384</VALUE>
        <VALUE id="14">243</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1990">
        <VALUE id="6">5790</VALUE>
        <VALUE id="23">223</VALUE>
        <VALUE id="5">3399</VALUE>
        <VALUE id="14">244</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1995">
        <VALUE id="6">5470</VALUE>
        <VALUE id="23">224</VALUE>
        <VALUE id="5">3405</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2000">
        <VALUE id="6">5380</VALUE>
        <VALUE id="23">224</VALUE>
        <VALUE id="5">3414</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2005">
        <VALUE id="6">5710</VALUE>
        <VALUE id="23">225</VALUE>
        <VALUE id="5">3425</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2015">
        <VALUE id="6">7000</VALUE>
        <VALUE id="23">226</VALUE>
        <VALUE id="5">3444</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2020">
        <VALUE id="6">6910</VALUE>
        <VALUE id="23">226</VALUE>
        <VALUE id="5">3452</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2025">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">227</VALUE>
        <VALUE id="5">3462</VALUE>
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2035">
        <VALUE id="6">6650</VALUE>
        <VALUE id="23">228</VALUE>
        <VALUE id="5">3481</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2040">
        <VALUE id="6">6860</VALUE>
        <VALUE id="23">229</VALUE>
        <VALUE id="5">3491</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2045">
        <VALUE id="6">6900</VALUE>
        <VALUE id="23">230</VALUE>
        <VALUE id="5">3500</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2050">
        <VALUE id="6">6910</VALUE>
        <VALUE id="23">230</VALUE>
        <VALUE id="5">3511</VALUE>
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2060">
        <VALUE id="6">7120</VALUE>
        <VALUE id="23">232</VALUE>
        <VALUE id="5">3526</VALUE>
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2065">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">232</VALUE>
        <VALUE id="5">3533</VALUE>
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2070">
        <VALUE id="6">5210</VALUE>
        <VALUE id="23">233</VALUE>
        <VALUE id="5">3539</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2080">
        <VALUE id="6">5060</VALUE>
        <VALUE id="23">234</VALUE>
        <VALUE id="5">3555</VALUE>
        <VALUE id="14">253</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2085">
        <VALUE id="6">5410</VALUE>
        <VALUE id="23">234</VALUE>
        <VALUE id="5">3565</VALUE>
        <VALUE id="14">254</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2090">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">235</VALUE>
        <VALUE id="5">3575</VALUE>
        <VALUE id="14">254</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2095">
        <VALUE id="6">6690</VALUE>
        <VALUE id="23">235</VALUE>
        <VALUE id="5">3584</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2105">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">236</VALUE>
        <VALUE id="5">3601</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2110">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">237</VALUE>
        <VALUE id="5">3611</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2115">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">238</VALUE>
        <VALUE id="5">3619</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2125">
        <VALUE id="6">5930</VALUE>
        <VALUE id="23">239</VALUE>
        <VALUE id="5">3634</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2130">
        <VALUE id="6">5760</VALUE>
        <VALUE id="23">239</VALUE>
        <VALUE id="5">3643</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2135">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">240</VALUE>
        <VALUE id="5">3652</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2140">
        <VALUE id="6">6390</VALUE>
        <VALUE id="23">240</VALUE>
        <VALUE id="5">3662</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2150">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">242</VALUE>
        <VALUE id="5">3677</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2155">
        <VALUE id="6">5660</VALUE>
        <VALUE id="23">242</VALUE>
        <VALUE id="5">3686</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2160">
        <VALUE id="6">6120</VALUE>
        <VALUE id="23">243</VALUE>
        <VALUE id="5">3697</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2170">
        <VALUE id="6">7240</VALUE>
        <VALUE id="23">244</VALUE>
        <VALUE id="5">3718</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2175">
        <VALUE id="6">7160</VALUE>
        <VALUE id="23">245</VALUE>
        <VALUE id="5">3726</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2180">
        <VALUE id="6">6920</VALUE>
        <VALUE id="23">245</VALUE>
        <VALUE id="5">3736</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2185">
        <VALUE id="6">6830</VALUE>
        <VALUE id="23">246</VALUE>
        <VALUE id="5">3744</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2195">
        <VALUE id="6">6570</VALUE>
        <VALUE id="23">247</VALUE>
        <VALUE id="5">3765</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2200">
        <VALUE id="6">6990</VALUE>
        <VALUE id="23">248</VALUE>
        <VALUE id="5">3775</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2205">
        <VALUE id="6">7280</VALUE>
        <VALUE id="23">249</VALUE>
        <VALUE id="5">3785</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2215">
        <VALUE id="6">7450</VALUE>
        <VALUE id="23">250</VALUE>
        <VALUE id="5">3806</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2220">
        <VALUE id="6">7480</VALUE>
        <VALUE id="23">251</VALUE>
        <VALUE id="5">3815</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2225">
        <VALUE id="6">7270</VALUE>
        <VALUE id="23">251</VALUE>
        <VALUE id="5">3825</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2230">
        <VALUE id="6">7050</VALUE>
        <VALUE id="23">252</VALUE>
        <VALUE id="5">3835</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2240">
        <VALUE id="6">7030</VALUE>
        <VALUE id="23">253</VALUE>
        <VALUE id="5">3854</VALUE>
        <VALUE id="14">253</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2245">
        <VALUE id="6">6940</VALUE>
        <VALUE id="23">254</VALUE>
        <VALUE id="5">3862</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2250">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">255</VALUE>
        <VALUE id="5">3871</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2260">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">256</VALUE>
        <VALUE id="5">3888</VALUE>
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2265">
        <VALUE id="6">6320</VALUE>
        <VALUE id="23">257</VALUE>
        <VALUE id="5">3898</VALUE>
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2270">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">257</VALUE>
        <VALUE id="5">3907</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2280">
        <VALUE id="6">6820</VALUE>
        <VALUE id="23">258</VALUE>
        <VALUE id="5">3927</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2285">
        <VALUE id="6">7050</VALUE>
        <VALUE id="23">259</VALUE>
        <VALUE id="5">3936</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2290">
        <VALUE id="6">6960</VALUE>
        <VALUE id="23">260</VALUE>
        <VALUE id="5">3946</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2295">
        <VALUE id="6">6880</VALUE>
        <VALUE id="23">260</VALUE>
        <VALUE id="5">3955</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2305">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">262</VALUE>
        <VALUE id="5">3973</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2310">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">262</VALUE>
        <VALUE id="5">3983</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2315">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">263</VALUE>
        <VALUE id="5">3992</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2325">
        <VALUE id="6">6630</VALUE>
        <VALUE id="23">264</VALUE>
        <VALUE id="5">4010</VALUE>
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2330">
        <VALUE id="6">6660</VALUE>
        <VALUE id="23">265</VALUE>
        <VALUE id="5">4019</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2335">
        <VALUE id="6">6650</VALUE>
        <VALUE id="23">265</VALUE>
        <VALUE id="5">4028</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2340">
        <VALUE id="6">6650</VALUE>
        <VALUE id="23">266</VALUE>
        <VALUE id="5">4037</VALUE>
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2350">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">267</VALUE>
        <VALUE id="5">4055</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2355">
        <VALUE id="6">6420</VALUE>
        <VALUE id="23">268</VALUE>
        <VALUE id="5">4064</VALUE>
        <VALUE id="14">247</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2360">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">268</VALUE>
        <VALUE id="5">4071</VALUE>
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2370">
        <VALUE id="6">5920</VALUE>
        <VALUE id="23">270</VALUE>
        <VALUE id="5">4089</VALUE>
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2375">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">270</VALUE>
        <VALUE id="5">4097</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2380">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">271</VALUE>
        <VALUE id="5">4106</VALUE>
        <VALUE id="14">249</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2385">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">271</VALUE>
        <VALUE id="5">4116</VALUE>
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2395">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">272</VALUE>
        <VALUE id="5">4133</VALUE>
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2400">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">273</VALUE>
        <VALUE id="5">4142</VALUE>
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2405">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">274</VALUE>
        <VALUE id="5">4150</VALUE>
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2415">
        <VALUE id="6">5890</VALUE>
        <VALUE id="23">275</VALUE>
        <VALUE id="5">4166</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2420">
        <VALUE id="6">5940</VALUE>
        <VALUE id="23">275</VALUE>
        <VALUE id="5">4175</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2425">
        <VALUE id="6">5880</VALUE>
        <VALUE id="23">276</VALUE>
        <VALUE id="5">4181</VALUE>
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2430">
        <VALUE id="6">5590</VALUE>
        <VALUE id="23">276</VALUE>
        <VALUE id="5">4189</VALUE>
        <VALUE id="14">253</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2440">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">277</VALUE>
        <VALUE id="5">4208</VALUE>
        <VALUE id="14">254</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2445">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">278</VALUE>
        <VALUE id="5">4218</VALUE>
        <VALUE id="14">254</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2450">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">279</VALUE>
        <VALUE id="5">4228</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2460">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">280</VALUE>
        <VALUE id="5">4245</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2465">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">281</VALUE>
        <VALUE id="5">4255</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2470">
        <VALUE id="6">6610</VALUE>
        <VALUE id="23">281</VALUE>
        <VALUE id="5">4265</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2475">
        <VALUE id="6">6900</VALUE>
        <VALUE id="23">282</VALUE>
        <VALUE id="5">4274</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2485">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">283</VALUE>
        <VALUE id="5">4292</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2490">
        <VALUE id="6">6420</VALUE>
        <VALUE id="23">284</VALUE>
        <VALUE id="5">4299</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2495">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">284</VALUE>
        <VALUE id="5">4308</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2505">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">285</VALUE>
        <VALUE id="5">4326</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2510">
        <VALUE id="6">6420</VALUE>
        <VALUE id="23">286</VALUE>
        <VALUE id="5">4335</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2515">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">287</VALUE>
        <VALUE id="5">4344</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2520">
        <VALUE id="6">6410</VALUE>
        <VALUE id="23">287</VALUE>
        <VALUE id="5">4352</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2530">
        <VALUE id="6">6420</VALUE>
        <VALUE id="23">288</VALUE>
        <VALUE id="5">4372</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2535">
        <VALUE id="6">6780</VALUE>
        <VALUE id="23">289</VALUE>
        <VALUE id="5">4382</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2540">
        <VALUE id="6">6970</VALUE>
        <VALUE id="23">290</VALUE>
        <VALUE id="5">4391</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2550">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">291</VALUE>
        <VALUE id="5">4408</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2555">
        <VALUE id="6">6400</VALUE>
        <VALUE id="23">291</VALUE>
        <VALUE id="5">4418</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2560">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">292</VALUE>
        <VALUE id="5">4427</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2570">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">293</VALUE>
        <VALUE id="5">4445</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2575">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">294</VALUE>
        <VALUE id="5">4454</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2580">
        <VALUE id="6">6560</VALUE>
        <VALUE id="23">295</VALUE>
        <VALUE id="5">4463</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2585">
        <VALUE id="6">6630</VALUE>
        <VALUE id="23">295</VALUE>
        <VALUE id="5">4473</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2595">
        <VALUE id="6">6780</VALUE>
        <VALUE id="23">296</VALUE>
        <VALUE id="5">4492</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2600">
        <VALUE id="6">6790</VALUE>
        <VALUE id="23">297</VALUE>
        <VALUE id="5">4502</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2605">
        <VALUE id="6">6830</VALUE>
        <VALUE id="23">298</VALUE>
        <VALUE id="5">4510</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2615">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">299</VALUE>
        <VALUE id="5">4529</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2620">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">300</VALUE>
        <VALUE id="5">4537</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2625">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">300</VALUE>
        <VALUE id="5">4546</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2630">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">301</VALUE>
        <VALUE id="5">4555</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2640">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">302</VALUE>
        <VALUE id="5">4574</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2645">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">303</VALUE>
        <VALUE id="5">4582</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2650">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">303</VALUE>
        <VALUE id="5">4592</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2660">
        <VALUE id="6">6540</VALUE>
        <VALUE id="23">304</VALUE>
        <VALUE id="5">4610</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2665">
        <VALUE id="6">6780</VALUE>
        <VALUE id="23">305</VALUE>
        <VALUE id="5">4621</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2670">
        <VALUE id="6">7030</VALUE>
        <VALUE id="23">306</VALUE>
        <VALUE id="5">4630</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2675">
        <VALUE id="6">7070</VALUE>
        <VALUE id="23">306</VALUE>
        <VALUE id="5">4639</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2685">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">308</VALUE>
        <VALUE id="5">4657</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2690">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">308</VALUE>
        <VALUE id="5">4666</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2695">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">309</VALUE>
        <VALUE id="5">4675</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2705">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">310</VALUE>
        <VALUE id="5">4693</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2710">
        <VALUE id="6">6480</VALUE>
        <VALUE id="23">311</VALUE>
        <VALUE id="5">4702</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2715">
        <VALUE id="6">6580</VALUE>
        <VALUE id="23">311</VALUE>
        <VALUE id="5">4712</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2720">
        <VALUE id="6">6720</VALUE>
        <VALUE id="23">312</VALUE>
        <VALUE id="5">4721</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2730">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">313</VALUE>
        <VALUE id="5">4739</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2735">
        <VALUE id="6">6410</VALUE>
        <VALUE id="23">314</VALUE>
        <VALUE id="5">4747</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2740">
        <VALUE id="6">6270</VALUE>
        <VALUE id="23">314</VALUE>
        <VALUE id="5">4756</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2750">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">316</VALUE>
        <VALUE id="5">4774</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2755">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">316</VALUE>
        <VALUE id="5">4783</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2760">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">317</VALUE>
        <VALUE id="5">4792</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2765">
        <VALUE id="6">6300</VALUE>
        <VALUE id="23">317</VALUE>
        <VALUE id="5">4800</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2775">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">319</VALUE>
        <VALUE id="5">4817</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2780">
        <VALUE id="6">6170</VALUE>
        <VALUE id="23">319</VALUE>
        <VALUE id="5">4826</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2785">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">320</VALUE>
        <VALUE id="5">4833</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2795">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">321</VALUE>
        <VALUE id="5">4852</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2800">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">321</VALUE>
        <VALUE id="5">4861</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2805">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">322</VALUE>
        <VALUE id="5">4871</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2815">
        <VALUE id="6">6570</VALUE>
        <VALUE id="23">323</VALUE>
        <VALUE id="5">4887</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2820">
        <VALUE id="6">6270</VALUE>
        <VALUE id="23">324</VALUE>
        <VALUE id="5">4896</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2825">
        <VALUE id="6">6250</VALUE>
        <VALUE id="23">324</VALUE>
        <VALUE id="5">4906</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2830">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">325</VALUE>
        <VALUE id="5">4915</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2840">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">326</VALUE>
        <VALUE id="5">4931</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2845">
        <VALUE id="6">6040</VALUE>
        <VALUE id="23">327</VALUE>
        <VALUE id="5">4941</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2850">
        <VALUE id="6">6280</VALUE>
        <VALUE id="23">327</VALUE>
        <VALUE id="5">4950</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2860">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">328</VALUE>
        <VALUE id="5">4968</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2865">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">329</VALUE>
        <VALUE id="5">4976</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2870">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">330</VALUE>
        <VALUE id="5">4984</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2875">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">330</VALUE>
        <VALUE id="5">4993</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2885">
        <VALUE id="6">6260</VALUE>
        <VALUE id="23">331</VALUE>
        <VALUE id="5">5010</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2890">
        <VALUE id="6">6140</VALUE>
        <VALUE id="23">332</VALUE>
        <VALUE id="5">5019</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2895">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">333</VALUE>
        <VALUE id="5">5029</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2905">
        <VALUE id="6">6110</VALUE>
        <VALUE id="23">334</VALUE>
        <VALUE id="5">5045</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2910">
        <VALUE id="6">6010</VALUE>
        <VALUE id="23">334</VALUE>
        <VALUE id="5">5054</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2915">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">335</VALUE>
        <VALUE id="5">5062</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2920">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">335</VALUE>
        <VALUE id="5">5070</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2930">
        <VALUE id="6">6180</VALUE>
        <VALUE id="23">337</VALUE>
        <VALUE id="5">5089</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2935">
        <VALUE id="6">6310</VALUE>
        <VALUE id="23">337</VALUE>
        <VALUE id="5">5097</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2940">
        <VALUE id="6">6240</VALUE>
        <VALUE id="23">338</VALUE>
        <VALUE id="5">5106</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2950">
        <VALUE id="6">6470</VALUE>
        <VALUE id="23">339</VALUE>
        <VALUE id="5">5124</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2955">
        <VALUE id="6">6540</VALUE>
        <VALUE id="23">339</VALUE>
        <VALUE id="5">5133</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2960">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">340</VALUE>
        <VALUE id="5">5142</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2965">
        <VALUE id="6">6390</VALUE>
        <VALUE id="23">341</VALUE>
        <VALUE id="5">5151</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2975">
        <VALUE id="6">6250</VALUE>
        <VALUE id="23">342</VALUE>
        <VALUE id="5">5168</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2980">
        <VALUE id="6">6080</VALUE>
        <VALUE id="23">342</VALUE>
        <VALUE id="5">5175</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2985">
        <VALUE id="6">5900</VALUE>
        <VALUE id="23">343</VALUE>
        <VALUE id="5">5183</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2995">
        <VALUE id="6">6100</VALUE>
        <VALUE id="23">344</VALUE>
        <VALUE id="5">5202</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3000">
        <VALUE id="6">6310</VALUE>
        <VALUE id="23">345</VALUE>
        <VALUE id="5">5211</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3005">
        <VALUE id="6">6480</VALUE>
        <VALUE id="23">345</VALUE>
        <VALUE id="5">5220</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3010">
        <VALUE id="6">6700</VALUE>
        <VALUE id="23">346</VALUE>
        <VALUE id="5">5230</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3020">
        <VALUE id="6">6790</VALUE>
        <VALUE id="23">347</VALUE>
        <VALUE id="5">5248</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3025">
        <VALUE id="6">6480</VALUE>
        <VALUE id="23">348</VALUE>
        <VALUE id="5">5257</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3030">
        <VALUE id="6">6350</VALUE>
        <VALUE id="23">348</VALUE>
        <VALUE id="5">5266</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3040">
        <VALUE id="6">6310</VALUE>
        <VALUE id="23">350</VALUE>
        <VALUE id="5">5282</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3045">
        <VALUE id="6">6030</VALUE>
        <VALUE id="23">350</VALUE>
        <VALUE id="5">5291</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3050">
        <VALUE id="6">6050</VALUE>
        <VALUE id="23">351</VALUE>
        <VALUE id="5">5300</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3055">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">351</VALUE>
        <VALUE id="5">5311</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3065">
        <VALUE id="6">6830</VALUE>
        <VALUE id="23">352</VALUE>
        <VALUE id="5">5328</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3070">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">353</VALUE>
        <VALUE id="5">5337</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3075">
        <VALUE id="6">6230</VALUE>
        <VALUE id="23">354</VALUE>
        <VALUE id="5">5345</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3085">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">355</VALUE>
        <VALUE id="5">5362</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3090">
        <VALUE id="6">6260</VALUE>
        <VALUE id="23">355</VALUE>
        <VALUE id="5">5372</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3095">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">356</VALUE>
        <VALUE id="5">5380</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3105">
        <VALUE id="6">5910</VALUE>
        <VALUE id="23">357</VALUE>
        <VALUE id="5">5396</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3110">
        <VALUE id="6">5970</VALUE>
        <VALUE id="23">358</VALUE>
        <VALUE id="5">5405</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3115">
        <VALUE id="6">6190</VALUE>
        <VALUE id="23">358</VALUE>
        <VALUE id="5">5414</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3120">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">359</VALUE>
        <VALUE id="5">5423</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3130">
        <VALUE id="6">6710</VALUE>
        <VALUE id="23">360</VALUE>
        <VALUE id="5">5443</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3135">
        <VALUE id="6">6960</VALUE>
        <VALUE id="23">361</VALUE>
        <VALUE id="5">5452</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3140">
        <VALUE id="6">6820</VALUE>
        <VALUE id="23">361</VALUE>
        <VALUE id="5">5460</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3150">
        <VALUE id="6">6300</VALUE>
        <VALUE id="23">362</VALUE>
        <VALUE id="5">5478</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3155">
        <VALUE id="6">6390</VALUE>
        <VALUE id="23">363</VALUE>
        <VALUE id="5">5487</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3160">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">364</VALUE>
        <VALUE id="5">5496</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3165">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">364</VALUE>
        <VALUE id="5">5506</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3175">
        <VALUE id="6">6660</VALUE>
        <VALUE id="23">366</VALUE>
        <VALUE id="5">5523</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3180">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">366</VALUE>
        <VALUE id="5">5532</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3185">
        <VALUE id="6">6330</VALUE>
        <VALUE id="23">367</VALUE>
        <VALUE id="5">5541</VALUE>
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3195">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">368</VALUE>
        <VALUE id="5">5559</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3200">
        <VALUE id="6">6290</VALUE>
        <VALUE id="23">369</VALUE>
        <VALUE id="5">5569</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3205">
        <VALUE id="6">6530</VALUE>
        <VALUE id="23">369</VALUE>
        <VALUE id="5">5577</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3210">
        <VALUE id="6">6610</VALUE>
        <VALUE id="23">370</VALUE>
        <VALUE id="5">5586</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3220">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">371</VALUE>
        <VALUE id="5">5606</VALUE>
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3225">
        <VALUE id="6">6840</VALUE>
        <VALUE id="23">372</VALUE>
        <VALUE id="5">5615</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3230">
        <VALUE id="6">6860</VALUE>
        <VALUE id="23">372</VALUE>
        <VALUE id="5">5625</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3240">
        <VALUE id="6">6930</VALUE>
        <VALUE id="23">374</VALUE>
        <VALUE id="5">5643</VALUE>
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3245">
        <VALUE id="6">6820</VALUE>
        <VALUE id="23">374</VALUE>
        <VALUE id="5">5653</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3250">
        <VALUE id="6">6780</VALUE>
        <VALUE id="23">375</VALUE>
        <VALUE id="5">5663</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3255">
        <VALUE id="6">6890</VALUE>
        <VALUE id="23">375</VALUE>
        <VALUE id="5">5673</VALUE>
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3265">
        <VALUE id="6">6800</VALUE>
        <VALUE id="23">377</VALUE>
        <VALUE id="5">5690</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3270">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">377</VALUE>
        <VALUE id="5">5699</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3275">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">378</VALUE>
        <VALUE id="5">5709</VALUE>
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3285">
        <VALUE id="6">6630</VALUE>
        <VALUE id="23">379</VALUE>
        <VALUE id="5">5727</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3290">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">380</VALUE>
        <VALUE id="5">5736</VALUE>
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3295">
        <VALUE id="6">6560</VALUE>
        <VALUE id="23">380</VALUE>
        <VALUE id="5">5745</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3300">
        <VALUE id="6">6670</VALUE>
        <VALUE id="23">381</VALUE>
        <VALUE id="5">5754</VALUE>
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3310">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">382</VALUE>
        <VALUE id="5">5772</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3315">
        <VALUE id="6">6430</VALUE>
        <VALUE id="23">383</VALUE>
        <VALUE id="5">5781</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3320">
        <VALUE id="6">6480</VALUE>
        <VALUE id="23">384</VALUE>
        <VALUE id="5">5790</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3330">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">385</VALUE>
        <VALUE id="5">5808</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3335">
        <VALUE id="6">6490</VALUE>
        <VALUE id="23">385</VALUE>
        <VALUE id="5">5817</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3340">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">386</VALUE>
        <VALUE id="5">5825</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3345">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">387</VALUE>
        <VALUE id="5">5834</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3355">
        <VALUE id="6">6610</VALUE>
        <VALUE id="23">388</VALUE>
        <VALUE id="5">5854</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3360">
        <VALUE id="6">6920</VALUE>
        <VALUE id="23">388</VALUE>
        <VALUE id="5">5864</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3365">
        <VALUE id="6">6990</VALUE>
        <VALUE id="23">389</VALUE>
        <VALUE id="5">5872</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3375">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">390</VALUE>
        <VALUE id="5">5890</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3380">
        <VALUE id="6">6360</VALUE>
        <VALUE id="23">391</VALUE>
        <VALUE id="5">5899</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3385">
        <VALUE id="6">6460</VALUE>
        <VALUE id="23">392</VALUE>
        <VALUE id="5">5908</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3395">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">393</VALUE>
        <VALUE id="5">5926</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3400">
        <VALUE id="6">6480</VALUE>
        <VALUE id="23">393</VALUE>
        <VALUE id="5">5935</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3405">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">394</VALUE>
        <VALUE id="5">5944</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3410">
        <VALUE id="6">6620</VALUE>
        <VALUE id="23">395</VALUE>
        <VALUE id="5">5953</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3420">
        <VALUE id="6">6340</VALUE>
        <VALUE id="23">396</VALUE>
        <VALUE id="5">5971</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3425">
        <VALUE id="6">6370</VALUE>
        <VALUE id="23">396</VALUE>
        <VALUE id="5">5980</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3430">
        <VALUE id="6">6500</VALUE>
        <VALUE id="23">397</VALUE>
        <VALUE id="5">5989</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3440">
        <VALUE id="6">6580</VALUE>
        <VALUE id="23">398</VALUE>
        <VALUE id="5">6008</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3445">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">399</VALUE>
        <VALUE id="5">6017</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3450">
        <VALUE id="6">6560</VALUE>
        <VALUE id="23">399</VALUE>
        <VALUE id="5">6026</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3455">
        <VALUE id="6">6780</VALUE>
        <VALUE id="23">400</VALUE>
        <VALUE id="5">6036</VALUE>
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3465">
        <VALUE id="6">6690</VALUE>
        <VALUE id="23">401</VALUE>
        <VALUE id="5">6054</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3470">
        <VALUE id="6">6670</VALUE>
        <VALUE id="23">402</VALUE>
        <VALUE id="5">6063</VALUE>
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3475">
        <VALUE id="6">6660</VALUE>
        <VALUE id="23">403</VALUE>
        <VALUE id="5">6073</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3485">
        <VALUE id="6">6660</VALUE>
        <VALUE id="23">404</VALUE>
        <VALUE id="5">6091</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3490">
        <VALUE id="6">6680</VALUE>
        <VALUE id="23">404</VALUE>
        <VALUE id="5">6100</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3495">
        <VALUE id="6">6560</VALUE>
        <VALUE id="23">405</VALUE>
        <VALUE id="5">6109</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3500">
        <VALUE id="6">6440</VALUE>
        <VALUE id="23">406</VALUE>
        <VALUE id="5">6118</VALUE>
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3510">
        <VALUE id="6">6390</VALUE>
        <VALUE id="23">407</VALUE>
        <VALUE id="5">6135</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3515">
        <VALUE id="6">6160</VALUE>
        <VALUE id="23">408</VALUE>
        <VALUE id="5">6143</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3520">
        <VALUE id="6">6200</VALUE>
        <VALUE id="23">408</VALUE>
        <VALUE id="5">6153</VALUE>
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3530">
        <VALUE id="6">6590</VALUE>
        <VALUE id="23">409</VALUE>
        <VALUE id="5">6171</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3535">
        <VALUE id="6">6520</VALUE>
        <VALUE id="23">410</VALUE>
        <VALUE id="5">6180</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3540">
        <VALUE id="6">6550</VALUE>
        <VALUE id="23">411</VALUE>
        <VALUE id="5">6189</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3545">
        <VALUE id="6">6450</VALUE>
        <VALUE id="23">411</VALUE>
        <VALUE id="5">6198</VALUE>
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3555">
        <VALUE id="6">6580</VALUE>
        <VALUE id="23">412</VALUE>
        <VALUE id="5">6216</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3560">
        <VALUE id="6">6510</VALUE>
        <VALUE id="23">413</VALUE>
        <VALUE id="5">6225</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3565">
        <VALUE id="6">6340</VALUE>
        <VALUE id="23">414</VALUE>
        <VALUE id="5">6233</VALUE>
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3575">
        <VALUE id="6">6000</VALUE>
        <VALUE id="23">415</VALUE>
        <VALUE id="5">6250</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3580">
        <VALUE id="6">6060</VALUE>
        <VALUE id="23">415</VALUE>
        <VALUE id="5">6259</VALUE>
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3585">
        <VALUE id="6">6260</VALUE>
        <VALUE id="23">416</VALUE>
        <VALUE id="5">6268</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3590">
        <VALUE id="6">6400</VALUE>
        <VALUE id="23">416</VALUE>
        <VALUE id="5">6278</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3600">
        <VALUE id="6">6640</VALUE>
        <VALUE id="23">418</VALUE>
        <VALUE id="5">6295</VALUE>
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="5">
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="25">
        <VALUE id="14">237</VALUE>
    </MEASURE>
<MEASURE elapsed_time="45">
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="70">
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="90">
        <VALUE id="14">235</VALUE>
    </MEASURE>
<MEASURE elapsed_time="115">
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="135">
        <VALUE id="14">233</VALUE>
    </MEASURE>
<MEASURE elapsed_time="160">
        <VALUE id="14">232</VALUE>
    </MEASURE>
<MEASURE elapsed_time="180">
        <VALUE id="14">231</VALUE>
    </MEASURE>
<MEASURE elapsed_time="205">
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="225">
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="250">
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="270">
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="290">
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="315">
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="335">
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="360">
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="380">
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="405">
        <VALUE id="14">207</VALUE>
    </MEASURE>
<MEASURE elapsed_time="425">
        <VALUE id="14">205</VALUE>
    </MEASURE>
<MEASURE elapsed_time="450">
        <VALUE id="14">203</VALUE>
    </MEASURE>
<MEASURE elapsed_time="470">
        <VALUE id="14">201</VALUE>
    </MEASURE>
<MEASURE elapsed_time="495">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="515">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="540">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="560">
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="580">
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="605">
        <VALUE id="14">197</VALUE>
    </MEASURE>
<MEASURE elapsed_time="625">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="650">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="670">
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="695">
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="715">
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="740">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="760">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="785">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="805">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="830">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="850">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="870">
        <VALUE id="14">198</VALUE>
    </MEASURE>
<MEASURE elapsed_time="895">
        <VALUE id="14">199</VALUE>
    </MEASURE>
<MEASURE elapsed_time="915">
        <VALUE id="14">200</VALUE>
    </MEASURE>
<MEASURE elapsed_time="940">
        <VALUE id="14">202</VALUE>
    </MEASURE>
<MEASURE elapsed_time="960">
        <VALUE id="14">204</VALUE>
    </MEASURE>
<MEASURE elapsed_time="985">
        <VALUE id="14">206</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1005">
        <VALUE id="14">208</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1030">
        <VALUE id="14">209</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1050">
        <VALUE id="14">210</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1075">
        <VALUE id="14">211</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1095">
        <VALUE id="14">212</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1120">
        <VALUE id="14">213</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1140">
        <VALUE id="14">214</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1160">
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1185">
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1205">
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1230">
        <VALUE id="14">215</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1250">
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1275">
        <VALUE id="14">216</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1295">
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1320">
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1340">
        <VALUE id="14">217</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1365">
        <VALUE id="14">218</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1385">
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1405">
        <VALUE id="14">219</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1430">
        <VALUE id="14">220</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1450">
        <VALUE id="14">221</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1475">
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1495">
        <VALUE id="14">222</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1520">
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1540">
        <VALUE id="14">223</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1565">
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1585">
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1610">
        <VALUE id="14">224</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1630">
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1655">
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1675">
        <VALUE id="14">225</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1695">
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1720">
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1740">
        <VALUE id="14">226</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1765">
        <VALUE id="14">227</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1785">
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1810">
        <VALUE id="14">228</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1830">
        <VALUE id="14">229</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1855">
        <VALUE id="14">232</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1875">
        <VALUE id="14">234</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1900">
        <VALUE id="14">236</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1920">
        <VALUE id="14">238</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1945">
        <VALUE id="14">241</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1965">
        <VALUE id="14">242</VALUE>
    </MEASURE>
<MEASURE elapsed_time="1985">
        <VALUE id="14">244</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2010">
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2030">
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2055">
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2075">
        <VALUE id="14">252</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2100">
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2120">
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2145">
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2165">
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2190">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2210">
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2235">
        <VALUE id="14">254</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2255">
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2275">
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2300">
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2320">
        <VALUE id="14">245</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2345">
        <VALUE id="14">246</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2365">
        <VALUE id="14">248</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2390">
        <VALUE id="14">250</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2410">
        <VALUE id="14">251</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2435">
        <VALUE id="14">253</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2455">
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2480">
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2500">
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2525">
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2545">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2565">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2590">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2610">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2635">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2655">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2680">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2700">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2725">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2745">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2770">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2790">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2810">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2835">
        <VALUE id="14">260</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2855">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2880">
        <VALUE id="14">262</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2900">
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2925">
        <VALUE id="14">264</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2945">
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2970">
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="2990">
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3015">
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3035">
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3060">
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3080">
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3100">
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3125">
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3145">
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3170">
        <VALUE id="14">269</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3190">
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3215">
        <VALUE id="14">268</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3235">
        <VALUE id="14">267</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3260">
        <VALUE id="14">266</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3280">
        <VALUE id="14">265</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3305">
        <VALUE id="14">263</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3325">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3350">
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3370">
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3390">
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3415">
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3435">
        <VALUE id="14">255</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3460">
        <VALUE id="14">256</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3480">
        <VALUE id="14">257</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3505">
        <VALUE id="14">258</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3525">
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3550">
        <VALUE id="14">259</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3570">
        <VALUE id="14">261</VALUE>
    </MEASURE>
<MEASURE elapsed_time="3595">
        <VALUE id="14">262</VALUE>
    </MEASURE>
            </DATASTREAM>
                            <TRACK>
                	<LOCATION elapsed_time="5">
		<LATITUDE>46.391003</LATITUDE>
		<LONGITUDE>4.804623</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="10">
		<LATITUDE>46.391068</LATITUDE>
		<LONGITUDE>4.804638</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="15">
		<LATITUDE>46.39115</LATITUDE>
		<LONGITUDE>4.804642</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="20">
		<LATITUDE>46.391243</LATITUDE>
		<LONGITUDE>4.804665</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="25">
		<LATITUDE>46.391312</LATITUDE>
		<LONGITUDE>4.804678</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="30">
		<LATITUDE>46.391407</LATITUDE>
		<LONGITUDE>4.804715</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="35">
		<LATITUDE>46.391483</LATITUDE>
		<LONGITUDE>4.804745</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="40">
		<LATITUDE>46.391565</LATITUDE>
		<LONGITUDE>4.804785</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="45">
		<LATITUDE>46.391638</LATITUDE>
		<LONGITUDE>4.804818</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="50">
		<LATITUDE>46.39171</LATITUDE>
		<LONGITUDE>4.804853</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="55">
		<LATITUDE>46.391775</LATITUDE>
		<LONGITUDE>4.804882</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="60">
		<LATITUDE>46.39185</LATITUDE>
		<LONGITUDE>4.804917</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="65">
		<LATITUDE>46.391915</LATITUDE>
		<LONGITUDE>4.804943</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="70">
		<LATITUDE>46.391995</LATITUDE>
		<LONGITUDE>4.80496</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="75">
		<LATITUDE>46.392077</LATITUDE>
		<LONGITUDE>4.804973</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="80">
		<LATITUDE>46.39215</LATITUDE>
		<LONGITUDE>4.80498</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="85">
		<LATITUDE>46.392223</LATITUDE>
		<LONGITUDE>4.804997</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="90">
		<LATITUDE>46.392307</LATITUDE>
		<LONGITUDE>4.804998</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="95">
		<LATITUDE>46.392397</LATITUDE>
		<LONGITUDE>4.805003</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="100">
		<LATITUDE>46.392457</LATITUDE>
		<LONGITUDE>4.805012</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="105">
		<LATITUDE>46.392527</LATITUDE>
		<LONGITUDE>4.805027</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="110">
		<LATITUDE>46.392602</LATITUDE>
		<LONGITUDE>4.80503</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="115">
		<LATITUDE>46.392678</LATITUDE>
		<LONGITUDE>4.805027</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="120">
		<LATITUDE>46.392762</LATITUDE>
		<LONGITUDE>4.805023</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="125">
		<LATITUDE>46.392845</LATITUDE>
		<LONGITUDE>4.805025</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="130">
		<LATITUDE>46.392933</LATITUDE>
		<LONGITUDE>4.805025</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="135">
		<LATITUDE>46.393008</LATITUDE>
		<LONGITUDE>4.805017</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="140">
		<LATITUDE>46.393078</LATITUDE>
		<LONGITUDE>4.805015</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="145">
		<LATITUDE>46.393157</LATITUDE>
		<LONGITUDE>4.805015</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="150">
		<LATITUDE>46.393238</LATITUDE>
		<LONGITUDE>4.805022</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="155">
		<LATITUDE>46.393323</LATITUDE>
		<LONGITUDE>4.805037</LONGITUDE>
		<ELEVATION>232</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="160">
		<LATITUDE>46.3934</LATITUDE>
		<LONGITUDE>4.805055</LONGITUDE>
		<ELEVATION>232</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="165">
		<LATITUDE>46.393463</LATITUDE>
		<LONGITUDE>4.805068</LONGITUDE>
		<ELEVATION>232</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="170">
		<LATITUDE>46.39356</LATITUDE>
		<LONGITUDE>4.805093</LONGITUDE>
		<ELEVATION>231</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="175">
		<LATITUDE>46.393628</LATITUDE>
		<LONGITUDE>4.805113</LONGITUDE>
		<ELEVATION>231</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="180">
		<LATITUDE>46.3937</LATITUDE>
		<LONGITUDE>4.805143</LONGITUDE>
		<ELEVATION>231</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="185">
		<LATITUDE>46.39377</LATITUDE>
		<LONGITUDE>4.805188</LONGITUDE>
		<ELEVATION>230</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="190">
		<LATITUDE>46.39385</LATITUDE>
		<LONGITUDE>4.805215</LONGITUDE>
		<ELEVATION>230</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="195">
		<LATITUDE>46.393923</LATITUDE>
		<LONGITUDE>4.805243</LONGITUDE>
		<ELEVATION>230</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="200">
		<LATITUDE>46.39399</LATITUDE>
		<LONGITUDE>4.80527</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="205">
		<LATITUDE>46.394073</LATITUDE>
		<LONGITUDE>4.805283</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="210">
		<LATITUDE>46.394133</LATITUDE>
		<LONGITUDE>4.805307</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="215">
		<LATITUDE>46.394217</LATITUDE>
		<LONGITUDE>4.805333</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="220">
		<LATITUDE>46.394288</LATITUDE>
		<LONGITUDE>4.805363</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="225">
		<LATITUDE>46.394298</LATITUDE>
		<LONGITUDE>4.805452</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="230">
		<LATITUDE>46.394273</LATITUDE>
		<LONGITUDE>4.805558</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="235">
		<LATITUDE>46.394237</LATITUDE>
		<LONGITUDE>4.805658</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="240">
		<LATITUDE>46.394223</LATITUDE>
		<LONGITUDE>4.805777</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="245">
		<LATITUDE>46.394187</LATITUDE>
		<LONGITUDE>4.805882</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="250">
		<LATITUDE>46.394165</LATITUDE>
		<LONGITUDE>4.805998</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="255">
		<LATITUDE>46.394162</LATITUDE>
		<LONGITUDE>4.806138</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="260">
		<LATITUDE>46.39417</LATITUDE>
		<LONGITUDE>4.80626</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="265">
		<LATITUDE>46.394165</LATITUDE>
		<LONGITUDE>4.806382</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="270">
		<LATITUDE>46.394133</LATITUDE>
		<LONGITUDE>4.806493</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="275">
		<LATITUDE>46.394078</LATITUDE>
		<LONGITUDE>4.806595</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="280">
		<LATITUDE>46.39402</LATITUDE>
		<LONGITUDE>4.806673</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="285">
		<LATITUDE>46.393962</LATITUDE>
		<LONGITUDE>4.806728</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="290">
		<LATITUDE>46.3939</LATITUDE>
		<LONGITUDE>4.80679</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="295">
		<LATITUDE>46.393853</LATITUDE>
		<LONGITUDE>4.806855</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="300">
		<LATITUDE>46.39379</LATITUDE>
		<LONGITUDE>4.806922</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="305">
		<LATITUDE>46.393722</LATITUDE>
		<LONGITUDE>4.807002</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="310">
		<LATITUDE>46.393658</LATITUDE>
		<LONGITUDE>4.807072</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="315">
		<LATITUDE>46.393598</LATITUDE>
		<LONGITUDE>4.807143</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="320">
		<LATITUDE>46.393532</LATITUDE>
		<LONGITUDE>4.807208</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="325">
		<LATITUDE>46.393473</LATITUDE>
		<LONGITUDE>4.807278</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="330">
		<LATITUDE>46.393412</LATITUDE>
		<LONGITUDE>4.807335</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="335">
		<LATITUDE>46.393355</LATITUDE>
		<LONGITUDE>4.80741</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="340">
		<LATITUDE>46.393297</LATITUDE>
		<LONGITUDE>4.807478</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="345">
		<LATITUDE>46.393245</LATITUDE>
		<LONGITUDE>4.807558</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="350">
		<LATITUDE>46.393215</LATITUDE>
		<LONGITUDE>4.807658</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="355">
		<LATITUDE>46.393168</LATITUDE>
		<LONGITUDE>4.80774</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="360">
		<LATITUDE>46.393153</LATITUDE>
		<LONGITUDE>4.80778</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="365">
		<LATITUDE>46.393102</LATITUDE>
		<LONGITUDE>4.807875</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="370">
		<LATITUDE>46.393045</LATITUDE>
		<LONGITUDE>4.807937</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="375">
		<LATITUDE>46.392983</LATITUDE>
		<LONGITUDE>4.808018</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="380">
		<LATITUDE>46.392973</LATITUDE>
		<LONGITUDE>4.808142</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="385">
		<LATITUDE>46.392977</LATITUDE>
		<LONGITUDE>4.808252</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="390">
		<LATITUDE>46.392993</LATITUDE>
		<LONGITUDE>4.808365</LONGITUDE>
		<ELEVATION>209</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="395">
		<LATITUDE>46.393007</LATITUDE>
		<LONGITUDE>4.80847</LONGITUDE>
		<ELEVATION>208</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="400">
		<LATITUDE>46.393013</LATITUDE>
		<LONGITUDE>4.808572</LONGITUDE>
		<ELEVATION>208</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="405">
		<LATITUDE>46.393023</LATITUDE>
		<LONGITUDE>4.808677</LONGITUDE>
		<ELEVATION>207</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="410">
		<LATITUDE>46.393035</LATITUDE>
		<LONGITUDE>4.808792</LONGITUDE>
		<ELEVATION>207</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="415">
		<LATITUDE>46.39304</LATITUDE>
		<LONGITUDE>4.808905</LONGITUDE>
		<ELEVATION>206</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="420">
		<LATITUDE>46.393057</LATITUDE>
		<LONGITUDE>4.809007</LONGITUDE>
		<ELEVATION>206</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="425">
		<LATITUDE>46.393068</LATITUDE>
		<LONGITUDE>4.809117</LONGITUDE>
		<ELEVATION>205</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="430">
		<LATITUDE>46.393088</LATITUDE>
		<LONGITUDE>4.809223</LONGITUDE>
		<ELEVATION>205</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="435">
		<LATITUDE>46.393127</LATITUDE>
		<LONGITUDE>4.809317</LONGITUDE>
		<ELEVATION>204</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="440">
		<LATITUDE>46.393165</LATITUDE>
		<LONGITUDE>4.809417</LONGITUDE>
		<ELEVATION>204</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="445">
		<LATITUDE>46.393213</LATITUDE>
		<LONGITUDE>4.80951</LONGITUDE>
		<ELEVATION>203</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="450">
		<LATITUDE>46.393257</LATITUDE>
		<LONGITUDE>4.80961</LONGITUDE>
		<ELEVATION>203</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="455">
		<LATITUDE>46.39329</LATITUDE>
		<LONGITUDE>4.809707</LONGITUDE>
		<ELEVATION>202</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="460">
		<LATITUDE>46.39333</LATITUDE>
		<LONGITUDE>4.809802</LONGITUDE>
		<ELEVATION>202</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="465">
		<LATITUDE>46.393367</LATITUDE>
		<LONGITUDE>4.809907</LONGITUDE>
		<ELEVATION>201</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="470">
		<LATITUDE>46.393403</LATITUDE>
		<LONGITUDE>4.810008</LONGITUDE>
		<ELEVATION>201</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="475">
		<LATITUDE>46.39345</LATITUDE>
		<LONGITUDE>4.810097</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="480">
		<LATITUDE>46.393505</LATITUDE>
		<LONGITUDE>4.810195</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="485">
		<LATITUDE>46.393567</LATITUDE>
		<LONGITUDE>4.810237</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="490">
		<LATITUDE>46.393623</LATITUDE>
		<LONGITUDE>4.810227</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="495">
		<LATITUDE>46.393687</LATITUDE>
		<LONGITUDE>4.810207</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="500">
		<LATITUDE>46.393755</LATITUDE>
		<LONGITUDE>4.81018</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="505">
		<LATITUDE>46.39382</LATITUDE>
		<LONGITUDE>4.810157</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="510">
		<LATITUDE>46.393887</LATITUDE>
		<LONGITUDE>4.810115</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="515">
		<LATITUDE>46.393958</LATITUDE>
		<LONGITUDE>4.810078</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="520">
		<LATITUDE>46.394027</LATITUDE>
		<LONGITUDE>4.810047</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="525">
		<LATITUDE>46.394093</LATITUDE>
		<LONGITUDE>4.81</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="530">
		<LATITUDE>46.394162</LATITUDE>
		<LONGITUDE>4.809952</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="535">
		<LATITUDE>46.394248</LATITUDE>
		<LONGITUDE>4.809907</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="540">
		<LATITUDE>46.394323</LATITUDE>
		<LONGITUDE>4.80986</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="545">
		<LATITUDE>46.394393</LATITUDE>
		<LONGITUDE>4.809803</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="550">
		<LATITUDE>46.394482</LATITUDE>
		<LONGITUDE>4.809747</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="555">
		<LATITUDE>46.39455</LATITUDE>
		<LONGITUDE>4.809685</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="560">
		<LATITUDE>46.39462</LATITUDE>
		<LONGITUDE>4.809618</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="565">
		<LATITUDE>46.39469</LATITUDE>
		<LONGITUDE>4.80955</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="570">
		<LATITUDE>46.394757</LATITUDE>
		<LONGITUDE>4.80948</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="575">
		<LATITUDE>46.394825</LATITUDE>
		<LONGITUDE>4.809412</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="580">
		<LATITUDE>46.394887</LATITUDE>
		<LONGITUDE>4.80934</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="585">
		<LATITUDE>46.394952</LATITUDE>
		<LONGITUDE>4.809275</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="590">
		<LATITUDE>46.395017</LATITUDE>
		<LONGITUDE>4.809203</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="595">
		<LATITUDE>46.395085</LATITUDE>
		<LONGITUDE>4.809143</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="600">
		<LATITUDE>46.395148</LATITUDE>
		<LONGITUDE>4.809088</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="605">
		<LATITUDE>46.39522</LATITUDE>
		<LONGITUDE>4.809037</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="610">
		<LATITUDE>46.395288</LATITUDE>
		<LONGITUDE>4.80898</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="615">
		<LATITUDE>46.39536</LATITUDE>
		<LONGITUDE>4.808925</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="620">
		<LATITUDE>46.395442</LATITUDE>
		<LONGITUDE>4.808872</LONGITUDE>
		<ELEVATION>197</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="625">
		<LATITUDE>46.395503</LATITUDE>
		<LONGITUDE>4.808808</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="630">
		<LATITUDE>46.395565</LATITUDE>
		<LONGITUDE>4.808742</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="635">
		<LATITUDE>46.395618</LATITUDE>
		<LONGITUDE>4.808663</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="640">
		<LATITUDE>46.395662</LATITUDE>
		<LONGITUDE>4.808572</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="645">
		<LATITUDE>46.395713</LATITUDE>
		<LONGITUDE>4.808485</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="650">
		<LATITUDE>46.39575</LATITUDE>
		<LONGITUDE>4.808397</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="655">
		<LATITUDE>46.395783</LATITUDE>
		<LONGITUDE>4.8083</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="660">
		<LATITUDE>46.39582</LATITUDE>
		<LONGITUDE>4.808208</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="665">
		<LATITUDE>46.395857</LATITUDE>
		<LONGITUDE>4.808123</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="670">
		<LATITUDE>46.395893</LATITUDE>
		<LONGITUDE>4.808028</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="675">
		<LATITUDE>46.395932</LATITUDE>
		<LONGITUDE>4.807937</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="680">
		<LATITUDE>46.395973</LATITUDE>
		<LONGITUDE>4.807843</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="685">
		<LATITUDE>46.396032</LATITUDE>
		<LONGITUDE>4.807762</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="690">
		<LATITUDE>46.39609</LATITUDE>
		<LONGITUDE>4.807697</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="695">
		<LATITUDE>46.396132</LATITUDE>
		<LONGITUDE>4.807667</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="700">
		<LATITUDE>46.396183</LATITUDE>
		<LONGITUDE>4.807698</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="705">
		<LATITUDE>46.396223</LATITUDE>
		<LONGITUDE>4.807772</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="710">
		<LATITUDE>46.396253</LATITUDE>
		<LONGITUDE>4.807837</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="715">
		<LATITUDE>46.396327</LATITUDE>
		<LONGITUDE>4.807832</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="720">
		<LATITUDE>46.396385</LATITUDE>
		<LONGITUDE>4.807853</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="725">
		<LATITUDE>46.39647</LATITUDE>
		<LONGITUDE>4.807908</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="730">
		<LATITUDE>46.396548</LATITUDE>
		<LONGITUDE>4.807938</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="735">
		<LATITUDE>46.396613</LATITUDE>
		<LONGITUDE>4.807967</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="740">
		<LATITUDE>46.396677</LATITUDE>
		<LONGITUDE>4.808013</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="745">
		<LATITUDE>46.396755</LATITUDE>
		<LONGITUDE>4.808045</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="750">
		<LATITUDE>46.396832</LATITUDE>
		<LONGITUDE>4.808085</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="755">
		<LATITUDE>46.396895</LATITUDE>
		<LONGITUDE>4.808133</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="760">
		<LATITUDE>46.396967</LATITUDE>
		<LONGITUDE>4.80818</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="765">
		<LATITUDE>46.397042</LATITUDE>
		<LONGITUDE>4.808215</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="770">
		<LATITUDE>46.397127</LATITUDE>
		<LONGITUDE>4.80827</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="775">
		<LATITUDE>46.397207</LATITUDE>
		<LONGITUDE>4.80832</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="780">
		<LATITUDE>46.397282</LATITUDE>
		<LONGITUDE>4.80837</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="785">
		<LATITUDE>46.397348</LATITUDE>
		<LONGITUDE>4.808415</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="790">
		<LATITUDE>46.397425</LATITUDE>
		<LONGITUDE>4.808462</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="795">
		<LATITUDE>46.397493</LATITUDE>
		<LONGITUDE>4.808513</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="800">
		<LATITUDE>46.397553</LATITUDE>
		<LONGITUDE>4.808552</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="805">
		<LATITUDE>46.39763</LATITUDE>
		<LONGITUDE>4.808582</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="810">
		<LATITUDE>46.397702</LATITUDE>
		<LONGITUDE>4.808615</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="815">
		<LATITUDE>46.397777</LATITUDE>
		<LONGITUDE>4.80866</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="820">
		<LATITUDE>46.397838</LATITUDE>
		<LONGITUDE>4.808703</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="825">
		<LATITUDE>46.397908</LATITUDE>
		<LONGITUDE>4.808743</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="830">
		<LATITUDE>46.397988</LATITUDE>
		<LONGITUDE>4.808788</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="835">
		<LATITUDE>46.398063</LATITUDE>
		<LONGITUDE>4.808828</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="840">
		<LATITUDE>46.398137</LATITUDE>
		<LONGITUDE>4.808865</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="845">
		<LATITUDE>46.398213</LATITUDE>
		<LONGITUDE>4.808905</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="850">
		<LATITUDE>46.39827</LATITUDE>
		<LONGITUDE>4.80895</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="855">
		<LATITUDE>46.398332</LATITUDE>
		<LONGITUDE>4.808997</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="860">
		<LATITUDE>46.398393</LATITUDE>
		<LONGITUDE>4.809042</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="865">
		<LATITUDE>46.398473</LATITUDE>
		<LONGITUDE>4.80908</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="870">
		<LATITUDE>46.398557</LATITUDE>
		<LONGITUDE>4.809108</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="875">
		<LATITUDE>46.398657</LATITUDE>
		<LONGITUDE>4.809138</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="880">
		<LATITUDE>46.398745</LATITUDE>
		<LONGITUDE>4.809185</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="885">
		<LATITUDE>46.39881</LATITUDE>
		<LONGITUDE>4.80924</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="890">
		<LATITUDE>46.398873</LATITUDE>
		<LONGITUDE>4.80929</LONGITUDE>
		<ELEVATION>198</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="895">
		<LATITUDE>46.39894</LATITUDE>
		<LONGITUDE>4.809345</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="900">
		<LATITUDE>46.399008</LATITUDE>
		<LONGITUDE>4.809417</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="905">
		<LATITUDE>46.39907</LATITUDE>
		<LONGITUDE>4.809475</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="910">
		<LATITUDE>46.399135</LATITUDE>
		<LONGITUDE>4.809537</LONGITUDE>
		<ELEVATION>199</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="915">
		<LATITUDE>46.399207</LATITUDE>
		<LONGITUDE>4.80959</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="920">
		<LATITUDE>46.399283</LATITUDE>
		<LONGITUDE>4.809642</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="925">
		<LATITUDE>46.399363</LATITUDE>
		<LONGITUDE>4.809685</LONGITUDE>
		<ELEVATION>200</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="930">
		<LATITUDE>46.399443</LATITUDE>
		<LONGITUDE>4.80972</LONGITUDE>
		<ELEVATION>201</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="935">
		<LATITUDE>46.39953</LATITUDE>
		<LONGITUDE>4.80975</LONGITUDE>
		<ELEVATION>202</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="940">
		<LATITUDE>46.3996</LATITUDE>
		<LONGITUDE>4.809788</LONGITUDE>
		<ELEVATION>202</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="945">
		<LATITUDE>46.399663</LATITUDE>
		<LONGITUDE>4.80982</LONGITUDE>
		<ELEVATION>202</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="950">
		<LATITUDE>46.39974</LATITUDE>
		<LONGITUDE>4.809843</LONGITUDE>
		<ELEVATION>203</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="955">
		<LATITUDE>46.399815</LATITUDE>
		<LONGITUDE>4.809877</LONGITUDE>
		<ELEVATION>203</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="960">
		<LATITUDE>46.399885</LATITUDE>
		<LONGITUDE>4.809905</LONGITUDE>
		<ELEVATION>204</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="965">
		<LATITUDE>46.399953</LATITUDE>
		<LONGITUDE>4.809935</LONGITUDE>
		<ELEVATION>204</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="970">
		<LATITUDE>46.40002</LATITUDE>
		<LONGITUDE>4.809955</LONGITUDE>
		<ELEVATION>205</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="975">
		<LATITUDE>46.400088</LATITUDE>
		<LONGITUDE>4.809982</LONGITUDE>
		<ELEVATION>205</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="980">
		<LATITUDE>46.400165</LATITUDE>
		<LONGITUDE>4.809998</LONGITUDE>
		<ELEVATION>206</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="985">
		<LATITUDE>46.400248</LATITUDE>
		<LONGITUDE>4.810017</LONGITUDE>
		<ELEVATION>206</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="990">
		<LATITUDE>46.400313</LATITUDE>
		<LONGITUDE>4.810042</LONGITUDE>
		<ELEVATION>206</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="995">
		<LATITUDE>46.400378</LATITUDE>
		<LONGITUDE>4.81006</LONGITUDE>
		<ELEVATION>207</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1000">
		<LATITUDE>46.400445</LATITUDE>
		<LONGITUDE>4.810088</LONGITUDE>
		<ELEVATION>207</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1005">
		<LATITUDE>46.400523</LATITUDE>
		<LONGITUDE>4.810117</LONGITUDE>
		<ELEVATION>208</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1010">
		<LATITUDE>46.400598</LATITUDE>
		<LONGITUDE>4.810142</LONGITUDE>
		<ELEVATION>208</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1015">
		<LATITUDE>46.400658</LATITUDE>
		<LONGITUDE>4.810167</LONGITUDE>
		<ELEVATION>208</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1020">
		<LATITUDE>46.400725</LATITUDE>
		<LONGITUDE>4.810198</LONGITUDE>
		<ELEVATION>209</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1025">
		<LATITUDE>46.400792</LATITUDE>
		<LONGITUDE>4.81023</LONGITUDE>
		<ELEVATION>209</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1030">
		<LATITUDE>46.400855</LATITUDE>
		<LONGITUDE>4.810272</LONGITUDE>
		<ELEVATION>209</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1035">
		<LATITUDE>46.400927</LATITUDE>
		<LONGITUDE>4.81031</LONGITUDE>
		<ELEVATION>209</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1040">
		<LATITUDE>46.401002</LATITUDE>
		<LONGITUDE>4.810343</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1045">
		<LATITUDE>46.401073</LATITUDE>
		<LONGITUDE>4.810372</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1050">
		<LATITUDE>46.40114</LATITUDE>
		<LONGITUDE>4.810403</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1055">
		<LATITUDE>46.40122</LATITUDE>
		<LONGITUDE>4.81043</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1060">
		<LATITUDE>46.40129</LATITUDE>
		<LONGITUDE>4.810465</LONGITUDE>
		<ELEVATION>210</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1065">
		<LATITUDE>46.401365</LATITUDE>
		<LONGITUDE>4.810505</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1070">
		<LATITUDE>46.401437</LATITUDE>
		<LONGITUDE>4.810543</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1075">
		<LATITUDE>46.401515</LATITUDE>
		<LONGITUDE>4.810575</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1080">
		<LATITUDE>46.401585</LATITUDE>
		<LONGITUDE>4.81061</LONGITUDE>
		<ELEVATION>211</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1085">
		<LATITUDE>46.401653</LATITUDE>
		<LONGITUDE>4.810643</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1090">
		<LATITUDE>46.401722</LATITUDE>
		<LONGITUDE>4.81068</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1095">
		<LATITUDE>46.401798</LATITUDE>
		<LONGITUDE>4.810715</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1100">
		<LATITUDE>46.401877</LATITUDE>
		<LONGITUDE>4.810742</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1105">
		<LATITUDE>46.401948</LATITUDE>
		<LONGITUDE>4.810773</LONGITUDE>
		<ELEVATION>212</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1110">
		<LATITUDE>46.402025</LATITUDE>
		<LONGITUDE>4.810803</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1115">
		<LATITUDE>46.402093</LATITUDE>
		<LONGITUDE>4.810837</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1120">
		<LATITUDE>46.402172</LATITUDE>
		<LONGITUDE>4.81087</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1125">
		<LATITUDE>46.40225</LATITUDE>
		<LONGITUDE>4.810907</LONGITUDE>
		<ELEVATION>213</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1130">
		<LATITUDE>46.402322</LATITUDE>
		<LONGITUDE>4.810943</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1135">
		<LATITUDE>46.402402</LATITUDE>
		<LONGITUDE>4.810975</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1140">
		<LATITUDE>46.402473</LATITUDE>
		<LONGITUDE>4.811008</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1145">
		<LATITUDE>46.402538</LATITUDE>
		<LONGITUDE>4.811045</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1150">
		<LATITUDE>46.40261</LATITUDE>
		<LONGITUDE>4.811082</LONGITUDE>
		<ELEVATION>214</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1155">
		<LATITUDE>46.402682</LATITUDE>
		<LONGITUDE>4.81112</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1160">
		<LATITUDE>46.402763</LATITUDE>
		<LONGITUDE>4.811152</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1165">
		<LATITUDE>46.40283</LATITUDE>
		<LONGITUDE>4.811178</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1170">
		<LATITUDE>46.402902</LATITUDE>
		<LONGITUDE>4.811217</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1175">
		<LATITUDE>46.402977</LATITUDE>
		<LONGITUDE>4.811253</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1180">
		<LATITUDE>46.40306</LATITUDE>
		<LONGITUDE>4.811282</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1185">
		<LATITUDE>46.403138</LATITUDE>
		<LONGITUDE>4.811312</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1190">
		<LATITUDE>46.403188</LATITUDE>
		<LONGITUDE>4.811377</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1195">
		<LATITUDE>46.40321</LATITUDE>
		<LONGITUDE>4.811475</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1200">
		<LATITUDE>46.403197</LATITUDE>
		<LONGITUDE>4.811597</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1205">
		<LATITUDE>46.403155</LATITUDE>
		<LONGITUDE>4.811697</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1210">
		<LATITUDE>46.403115</LATITUDE>
		<LONGITUDE>4.811798</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1215">
		<LATITUDE>46.40307</LATITUDE>
		<LONGITUDE>4.811905</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1220">
		<LATITUDE>46.403025</LATITUDE>
		<LONGITUDE>4.812005</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1225">
		<LATITUDE>46.402995</LATITUDE>
		<LONGITUDE>4.812105</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1230">
		<LATITUDE>46.403015</LATITUDE>
		<LONGITUDE>4.812192</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1235">
		<LATITUDE>46.403088</LATITUDE>
		<LONGITUDE>4.81222</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1240">
		<LATITUDE>46.40316</LATITUDE>
		<LONGITUDE>4.812227</LONGITUDE>
		<ELEVATION>215</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1245">
		<LATITUDE>46.403238</LATITUDE>
		<LONGITUDE>4.812248</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1250">
		<LATITUDE>46.403317</LATITUDE>
		<LONGITUDE>4.812278</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1255">
		<LATITUDE>46.4034</LATITUDE>
		<LONGITUDE>4.812298</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1260">
		<LATITUDE>46.403483</LATITUDE>
		<LONGITUDE>4.812325</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1265">
		<LATITUDE>46.403553</LATITUDE>
		<LONGITUDE>4.812355</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1270">
		<LATITUDE>46.403627</LATITUDE>
		<LONGITUDE>4.81239</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1275">
		<LATITUDE>46.403695</LATITUDE>
		<LONGITUDE>4.812413</LONGITUDE>
		<ELEVATION>216</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1280">
		<LATITUDE>46.403775</LATITUDE>
		<LONGITUDE>4.812438</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1285">
		<LATITUDE>46.403843</LATITUDE>
		<LONGITUDE>4.812467</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1290">
		<LATITUDE>46.40392</LATITUDE>
		<LONGITUDE>4.812488</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1295">
		<LATITUDE>46.404007</LATITUDE>
		<LONGITUDE>4.812507</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1300">
		<LATITUDE>46.404082</LATITUDE>
		<LONGITUDE>4.812542</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1305">
		<LATITUDE>46.40416</LATITUDE>
		<LONGITUDE>4.812565</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1310">
		<LATITUDE>46.404228</LATITUDE>
		<LONGITUDE>4.812583</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1315">
		<LATITUDE>46.404303</LATITUDE>
		<LONGITUDE>4.812607</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1320">
		<LATITUDE>46.404365</LATITUDE>
		<LONGITUDE>4.812632</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1325">
		<LATITUDE>46.404428</LATITUDE>
		<LONGITUDE>4.812663</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1330">
		<LATITUDE>46.40449</LATITUDE>
		<LONGITUDE>4.81271</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1335">
		<LATITUDE>46.404565</LATITUDE>
		<LONGITUDE>4.812753</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1340">
		<LATITUDE>46.404638</LATITUDE>
		<LONGITUDE>4.812808</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1345">
		<LATITUDE>46.40472</LATITUDE>
		<LONGITUDE>4.812868</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1350">
		<LATITUDE>46.404782</LATITUDE>
		<LONGITUDE>4.812927</LONGITUDE>
		<ELEVATION>217</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1355">
		<LATITUDE>46.404855</LATITUDE>
		<LONGITUDE>4.81297</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1360">
		<LATITUDE>46.404928</LATITUDE>
		<LONGITUDE>4.813005</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1365">
		<LATITUDE>46.404998</LATITUDE>
		<LONGITUDE>4.813028</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1370">
		<LATITUDE>46.405045</LATITUDE>
		<LONGITUDE>4.813042</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1375">
		<LATITUDE>46.405115</LATITUDE>
		<LONGITUDE>4.813047</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1380">
		<LATITUDE>46.405188</LATITUDE>
		<LONGITUDE>4.81304</LONGITUDE>
		<ELEVATION>218</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1385">
		<LATITUDE>46.405268</LATITUDE>
		<LONGITUDE>4.813043</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1390">
		<LATITUDE>46.405352</LATITUDE>
		<LONGITUDE>4.813053</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1395">
		<LATITUDE>46.405422</LATITUDE>
		<LONGITUDE>4.813065</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1400">
		<LATITUDE>46.40549</LATITUDE>
		<LONGITUDE>4.81309</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1405">
		<LATITUDE>46.405553</LATITUDE>
		<LONGITUDE>4.81311</LONGITUDE>
		<ELEVATION>219</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1410">
		<LATITUDE>46.405632</LATITUDE>
		<LONGITUDE>4.813122</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1415">
		<LATITUDE>46.405713</LATITUDE>
		<LONGITUDE>4.813142</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1420">
		<LATITUDE>46.405793</LATITUDE>
		<LONGITUDE>4.813158</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1425">
		<LATITUDE>46.405865</LATITUDE>
		<LONGITUDE>4.813175</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1430">
		<LATITUDE>46.405935</LATITUDE>
		<LONGITUDE>4.813178</LONGITUDE>
		<ELEVATION>220</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1435">
		<LATITUDE>46.40602</LATITUDE>
		<LONGITUDE>4.813185</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1440">
		<LATITUDE>46.406105</LATITUDE>
		<LONGITUDE>4.813215</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1445">
		<LATITUDE>46.406178</LATITUDE>
		<LONGITUDE>4.81324</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1450">
		<LATITUDE>46.406263</LATITUDE>
		<LONGITUDE>4.813255</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1455">
		<LATITUDE>46.406333</LATITUDE>
		<LONGITUDE>4.813268</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1460">
		<LATITUDE>46.4064</LATITUDE>
		<LONGITUDE>4.81329</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1465">
		<LATITUDE>46.406472</LATITUDE>
		<LONGITUDE>4.813312</LONGITUDE>
		<ELEVATION>221</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1470">
		<LATITUDE>46.406542</LATITUDE>
		<LONGITUDE>4.813332</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1475">
		<LATITUDE>46.406625</LATITUDE>
		<LONGITUDE>4.813345</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1480">
		<LATITUDE>46.4067</LATITUDE>
		<LONGITUDE>4.813358</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1485">
		<LATITUDE>46.406778</LATITUDE>
		<LONGITUDE>4.81336</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1490">
		<LATITUDE>46.406843</LATITUDE>
		<LONGITUDE>4.81335</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1495">
		<LATITUDE>46.406913</LATITUDE>
		<LONGITUDE>4.813333</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1500">
		<LATITUDE>46.406985</LATITUDE>
		<LONGITUDE>4.813315</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1505">
		<LATITUDE>46.407058</LATITUDE>
		<LONGITUDE>4.813288</LONGITUDE>
		<ELEVATION>222</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1510">
		<LATITUDE>46.407133</LATITUDE>
		<LONGITUDE>4.813278</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1515">
		<LATITUDE>46.407218</LATITUDE>
		<LONGITUDE>4.813293</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1520">
		<LATITUDE>46.407282</LATITUDE>
		<LONGITUDE>4.813298</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1525">
		<LATITUDE>46.407353</LATITUDE>
		<LONGITUDE>4.813305</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1530">
		<LATITUDE>46.407433</LATITUDE>
		<LONGITUDE>4.813328</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1535">
		<LATITUDE>46.407505</LATITUDE>
		<LONGITUDE>4.813372</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1540">
		<LATITUDE>46.407587</LATITUDE>
		<LONGITUDE>4.813413</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1545">
		<LATITUDE>46.407672</LATITUDE>
		<LONGITUDE>4.813457</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1550">
		<LATITUDE>46.40775</LATITUDE>
		<LONGITUDE>4.813492</LONGITUDE>
		<ELEVATION>223</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1555">
		<LATITUDE>46.407817</LATITUDE>
		<LONGITUDE>4.813527</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1560">
		<LATITUDE>46.407888</LATITUDE>
		<LONGITUDE>4.813583</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1565">
		<LATITUDE>46.407957</LATITUDE>
		<LONGITUDE>4.81363</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1570">
		<LATITUDE>46.408035</LATITUDE>
		<LONGITUDE>4.813675</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1575">
		<LATITUDE>46.408108</LATITUDE>
		<LONGITUDE>4.813722</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1580">
		<LATITUDE>46.408183</LATITUDE>
		<LONGITUDE>4.813738</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1585">
		<LATITUDE>46.408268</LATITUDE>
		<LONGITUDE>4.813767</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1590">
		<LATITUDE>46.408337</LATITUDE>
		<LONGITUDE>4.813808</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1595">
		<LATITUDE>46.408403</LATITUDE>
		<LONGITUDE>4.813845</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1600">
		<LATITUDE>46.40848</LATITUDE>
		<LONGITUDE>4.813888</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1605">
		<LATITUDE>46.408547</LATITUDE>
		<LONGITUDE>4.813938</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1610">
		<LATITUDE>46.408613</LATITUDE>
		<LONGITUDE>4.813983</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1615">
		<LATITUDE>46.408682</LATITUDE>
		<LONGITUDE>4.814027</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1620">
		<LATITUDE>46.408762</LATITUDE>
		<LONGITUDE>4.814068</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1625">
		<LATITUDE>46.408833</LATITUDE>
		<LONGITUDE>4.814118</LONGITUDE>
		<ELEVATION>224</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1630">
		<LATITUDE>46.408912</LATITUDE>
		<LONGITUDE>4.814162</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1635">
		<LATITUDE>46.408988</LATITUDE>
		<LONGITUDE>4.814205</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1640">
		<LATITUDE>46.409065</LATITUDE>
		<LONGITUDE>4.814243</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1645">
		<LATITUDE>46.409137</LATITUDE>
		<LONGITUDE>4.814282</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1650">
		<LATITUDE>46.40921</LATITUDE>
		<LONGITUDE>4.814327</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1655">
		<LATITUDE>46.409283</LATITUDE>
		<LONGITUDE>4.814367</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1660">
		<LATITUDE>46.409362</LATITUDE>
		<LONGITUDE>4.814412</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1665">
		<LATITUDE>46.409428</LATITUDE>
		<LONGITUDE>4.814452</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1670">
		<LATITUDE>46.409502</LATITUDE>
		<LONGITUDE>4.81449</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1675">
		<LATITUDE>46.40957</LATITUDE>
		<LONGITUDE>4.814528</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1680">
		<LATITUDE>46.40964</LATITUDE>
		<LONGITUDE>4.814568</LONGITUDE>
		<ELEVATION>225</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1685">
		<LATITUDE>46.409713</LATITUDE>
		<LONGITUDE>4.814602</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1690">
		<LATITUDE>46.409798</LATITUDE>
		<LONGITUDE>4.81463</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1695">
		<LATITUDE>46.40988</LATITUDE>
		<LONGITUDE>4.814652</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1700">
		<LATITUDE>46.409953</LATITUDE>
		<LONGITUDE>4.814678</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1705">
		<LATITUDE>46.410023</LATITUDE>
		<LONGITUDE>4.814707</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1710">
		<LATITUDE>46.410085</LATITUDE>
		<LONGITUDE>4.81473</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1715">
		<LATITUDE>46.41016</LATITUDE>
		<LONGITUDE>4.814757</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1720">
		<LATITUDE>46.410235</LATITUDE>
		<LONGITUDE>4.814778</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1725">
		<LATITUDE>46.410307</LATITUDE>
		<LONGITUDE>4.814807</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1730">
		<LATITUDE>46.410388</LATITUDE>
		<LONGITUDE>4.814838</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1735">
		<LATITUDE>46.410468</LATITUDE>
		<LONGITUDE>4.814882</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1740">
		<LATITUDE>46.410543</LATITUDE>
		<LONGITUDE>4.814907</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1745">
		<LATITUDE>46.410618</LATITUDE>
		<LONGITUDE>4.814937</LONGITUDE>
		<ELEVATION>226</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1750">
		<LATITUDE>46.410683</LATITUDE>
		<LONGITUDE>4.81497</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1755">
		<LATITUDE>46.410753</LATITUDE>
		<LONGITUDE>4.815002</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1760">
		<LATITUDE>46.410837</LATITUDE>
		<LONGITUDE>4.815023</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1765">
		<LATITUDE>46.410913</LATITUDE>
		<LONGITUDE>4.815045</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1770">
		<LATITUDE>46.410995</LATITUDE>
		<LONGITUDE>4.815068</LONGITUDE>
		<ELEVATION>227</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1775">
		<LATITUDE>46.411067</LATITUDE>
		<LONGITUDE>4.815107</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1780">
		<LATITUDE>46.411145</LATITUDE>
		<LONGITUDE>4.815125</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1785">
		<LATITUDE>46.41121</LATITUDE>
		<LONGITUDE>4.815153</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1790">
		<LATITUDE>46.411273</LATITUDE>
		<LONGITUDE>4.815177</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1795">
		<LATITUDE>46.411333</LATITUDE>
		<LONGITUDE>4.815213</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1800">
		<LATITUDE>46.41141</LATITUDE>
		<LONGITUDE>4.815273</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1805">
		<LATITUDE>46.411475</LATITUDE>
		<LONGITUDE>4.815347</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1810">
		<LATITUDE>46.411542</LATITUDE>
		<LONGITUDE>4.81541</LONGITUDE>
		<ELEVATION>228</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1815">
		<LATITUDE>46.411605</LATITUDE>
		<LONGITUDE>4.815467</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1820">
		<LATITUDE>46.411683</LATITUDE>
		<LONGITUDE>4.815527</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1825">
		<LATITUDE>46.411758</LATITUDE>
		<LONGITUDE>4.815553</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1830">
		<LATITUDE>46.411827</LATITUDE>
		<LONGITUDE>4.815548</LONGITUDE>
		<ELEVATION>229</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1835">
		<LATITUDE>46.411903</LATITUDE>
		<LONGITUDE>4.815547</LONGITUDE>
		<ELEVATION>230</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1840">
		<LATITUDE>46.411985</LATITUDE>
		<LONGITUDE>4.81555</LONGITUDE>
		<ELEVATION>231</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1845">
		<LATITUDE>46.412058</LATITUDE>
		<LONGITUDE>4.815567</LONGITUDE>
		<ELEVATION>231</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1850">
		<LATITUDE>46.41213</LATITUDE>
		<LONGITUDE>4.815565</LONGITUDE>
		<ELEVATION>232</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1855">
		<LATITUDE>46.412195</LATITUDE>
		<LONGITUDE>4.815575</LONGITUDE>
		<ELEVATION>232</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1860">
		<LATITUDE>46.412265</LATITUDE>
		<LONGITUDE>4.815583</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1865">
		<LATITUDE>46.412337</LATITUDE>
		<LONGITUDE>4.81559</LONGITUDE>
		<ELEVATION>233</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1870">
		<LATITUDE>46.412413</LATITUDE>
		<LONGITUDE>4.815597</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1875">
		<LATITUDE>46.412487</LATITUDE>
		<LONGITUDE>4.815608</LONGITUDE>
		<ELEVATION>234</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1880">
		<LATITUDE>46.412558</LATITUDE>
		<LONGITUDE>4.815608</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1885">
		<LATITUDE>46.412617</LATITUDE>
		<LONGITUDE>4.815623</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1890">
		<LATITUDE>46.412697</LATITUDE>
		<LONGITUDE>4.815638</LONGITUDE>
		<ELEVATION>235</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1895">
		<LATITUDE>46.41277</LATITUDE>
		<LONGITUDE>4.815662</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1900">
		<LATITUDE>46.41285</LATITUDE>
		<LONGITUDE>4.815678</LONGITUDE>
		<ELEVATION>236</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1905">
		<LATITUDE>46.412937</LATITUDE>
		<LONGITUDE>4.815698</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1910">
		<LATITUDE>46.41303</LATITUDE>
		<LONGITUDE>4.815715</LONGITUDE>
		<ELEVATION>237</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1915">
		<LATITUDE>46.413118</LATITUDE>
		<LONGITUDE>4.815727</LONGITUDE>
		<ELEVATION>238</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1920">
		<LATITUDE>46.413207</LATITUDE>
		<LONGITUDE>4.815733</LONGITUDE>
		<ELEVATION>238</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1925">
		<LATITUDE>46.41328</LATITUDE>
		<LONGITUDE>4.81575</LONGITUDE>
		<ELEVATION>239</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1930">
		<LATITUDE>46.413367</LATITUDE>
		<LONGITUDE>4.815772</LONGITUDE>
		<ELEVATION>239</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1935">
		<LATITUDE>46.413442</LATITUDE>
		<LONGITUDE>4.815795</LONGITUDE>
		<ELEVATION>240</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1940">
		<LATITUDE>46.41352</LATITUDE>
		<LONGITUDE>4.815807</LONGITUDE>
		<ELEVATION>240</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1945">
		<LATITUDE>46.413597</LATITUDE>
		<LONGITUDE>4.815832</LONGITUDE>
		<ELEVATION>241</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1950">
		<LATITUDE>46.41366</LATITUDE>
		<LONGITUDE>4.81585</LONGITUDE>
		<ELEVATION>241</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1955">
		<LATITUDE>46.413705</LATITUDE>
		<LONGITUDE>4.815855</LONGITUDE>
		<ELEVATION>241</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1960">
		<LATITUDE>46.41378</LATITUDE>
		<LONGITUDE>4.81588</LONGITUDE>
		<ELEVATION>242</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1965">
		<LATITUDE>46.413845</LATITUDE>
		<LONGITUDE>4.815907</LONGITUDE>
		<ELEVATION>242</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1970">
		<LATITUDE>46.41392</LATITUDE>
		<LONGITUDE>4.81594</LONGITUDE>
		<ELEVATION>242</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1975">
		<LATITUDE>46.414005</LATITUDE>
		<LONGITUDE>4.815955</LONGITUDE>
		<ELEVATION>243</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1980">
		<LATITUDE>46.414082</LATITUDE>
		<LONGITUDE>4.815973</LONGITUDE>
		<ELEVATION>243</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1985">
		<LATITUDE>46.414138</LATITUDE>
		<LONGITUDE>4.815988</LONGITUDE>
		<ELEVATION>244</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1990">
		<LATITUDE>46.414212</LATITUDE>
		<LONGITUDE>4.816002</LONGITUDE>
		<ELEVATION>244</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="1995">
		<LATITUDE>46.414265</LATITUDE>
		<LONGITUDE>4.816032</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2000">
		<LATITUDE>46.414347</LATITUDE>
		<LONGITUDE>4.816055</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2005">
		<LATITUDE>46.41444</LATITUDE>
		<LONGITUDE>4.816083</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2010">
		<LATITUDE>46.414523</LATITUDE>
		<LONGITUDE>4.816128</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2015">
		<LATITUDE>46.414598</LATITUDE>
		<LONGITUDE>4.816173</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2020">
		<LATITUDE>46.414655</LATITUDE>
		<LONGITUDE>4.816233</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2025">
		<LATITUDE>46.414735</LATITUDE>
		<LONGITUDE>4.81628</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2030">
		<LATITUDE>46.414813</LATITUDE>
		<LONGITUDE>4.816313</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2035">
		<LATITUDE>46.414885</LATITUDE>
		<LONGITUDE>4.816393</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2040">
		<LATITUDE>46.414952</LATITUDE>
		<LONGITUDE>4.816467</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2045">
		<LATITUDE>46.415025</LATITUDE>
		<LONGITUDE>4.81651</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2050">
		<LATITUDE>46.415125</LATITUDE>
		<LONGITUDE>4.816535</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2055">
		<LATITUDE>46.415207</LATITUDE>
		<LONGITUDE>4.816553</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2060">
		<LATITUDE>46.415253</LATITUDE>
		<LONGITUDE>4.816575</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2065">
		<LATITUDE>46.415312</LATITUDE>
		<LONGITUDE>4.816603</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2070">
		<LATITUDE>46.415363</LATITUDE>
		<LONGITUDE>4.81663</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2075">
		<LATITUDE>46.415428</LATITUDE>
		<LONGITUDE>4.816662</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2080">
		<LATITUDE>46.415497</LATITUDE>
		<LONGITUDE>4.81669</LONGITUDE>
		<ELEVATION>253</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2085">
		<LATITUDE>46.415583</LATITUDE>
		<LONGITUDE>4.816725</LONGITUDE>
		<ELEVATION>254</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2090">
		<LATITUDE>46.41567</LATITUDE>
		<LONGITUDE>4.816757</LONGITUDE>
		<ELEVATION>254</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2095">
		<LATITUDE>46.415752</LATITUDE>
		<LONGITUDE>4.816775</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2100">
		<LATITUDE>46.415828</LATITUDE>
		<LONGITUDE>4.816802</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2105">
		<LATITUDE>46.415898</LATITUDE>
		<LONGITUDE>4.816812</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2110">
		<LATITUDE>46.415983</LATITUDE>
		<LONGITUDE>4.816852</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2115">
		<LATITUDE>46.416048</LATITUDE>
		<LONGITUDE>4.816908</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2120">
		<LATITUDE>46.41611</LATITUDE>
		<LONGITUDE>4.816927</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2125">
		<LATITUDE>46.41618</LATITUDE>
		<LONGITUDE>4.816935</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2130">
		<LATITUDE>46.416257</LATITUDE>
		<LONGITUDE>4.81696</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2135">
		<LATITUDE>46.416335</LATITUDE>
		<LONGITUDE>4.817002</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2140">
		<LATITUDE>46.416403</LATITUDE>
		<LONGITUDE>4.817082</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2145">
		<LATITUDE>46.41646</LATITUDE>
		<LONGITUDE>4.817107</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2150">
		<LATITUDE>46.416528</LATITUDE>
		<LONGITUDE>4.81713</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2155">
		<LATITUDE>46.416605</LATITUDE>
		<LONGITUDE>4.81718</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2160">
		<LATITUDE>46.416698</LATITUDE>
		<LONGITUDE>4.81722</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2165">
		<LATITUDE>46.416788</LATITUDE>
		<LONGITUDE>4.817248</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2170">
		<LATITUDE>46.416867</LATITUDE>
		<LONGITUDE>4.817318</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2175">
		<LATITUDE>46.416933</LATITUDE>
		<LONGITUDE>4.817363</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2180">
		<LATITUDE>46.417018</LATITUDE>
		<LONGITUDE>4.817415</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2185">
		<LATITUDE>46.417078</LATITUDE>
		<LONGITUDE>4.817467</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2190">
		<LATITUDE>46.417157</LATITUDE>
		<LONGITUDE>4.817522</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2195">
		<LATITUDE>46.417202</LATITUDE>
		<LONGITUDE>4.817625</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2200">
		<LATITUDE>46.417202</LATITUDE>
		<LONGITUDE>4.817758</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2205">
		<LATITUDE>46.417192</LATITUDE>
		<LONGITUDE>4.817885</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2210">
		<LATITUDE>46.417155</LATITUDE>
		<LONGITUDE>4.818023</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2215">
		<LATITUDE>46.417115</LATITUDE>
		<LONGITUDE>4.818145</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2220">
		<LATITUDE>46.417075</LATITUDE>
		<LONGITUDE>4.818247</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2225">
		<LATITUDE>46.417042</LATITUDE>
		<LONGITUDE>4.818367</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2230">
		<LATITUDE>46.417005</LATITUDE>
		<LONGITUDE>4.818478</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2235">
		<LATITUDE>46.41696</LATITUDE>
		<LONGITUDE>4.818588</LONGITUDE>
		<ELEVATION>254</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2240">
		<LATITUDE>46.416915</LATITUDE>
		<LONGITUDE>4.818693</LONGITUDE>
		<ELEVATION>253</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2245">
		<LATITUDE>46.416873</LATITUDE>
		<LONGITUDE>4.818787</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2250">
		<LATITUDE>46.416833</LATITUDE>
		<LONGITUDE>4.818882</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2255">
		<LATITUDE>46.416792</LATITUDE>
		<LONGITUDE>4.818978</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2260">
		<LATITUDE>46.416755</LATITUDE>
		<LONGITUDE>4.819075</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2265">
		<LATITUDE>46.416712</LATITUDE>
		<LONGITUDE>4.819182</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2270">
		<LATITUDE>46.416673</LATITUDE>
		<LONGITUDE>4.81929</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2275">
		<LATITUDE>46.41663</LATITUDE>
		<LONGITUDE>4.819405</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2280">
		<LATITUDE>46.41659</LATITUDE>
		<LONGITUDE>4.81952</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2285">
		<LATITUDE>46.416552</LATITUDE>
		<LONGITUDE>4.819623</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2290">
		<LATITUDE>46.416507</LATITUDE>
		<LONGITUDE>4.819733</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2295">
		<LATITUDE>46.416468</LATITUDE>
		<LONGITUDE>4.81984</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2300">
		<LATITUDE>46.416437</LATITUDE>
		<LONGITUDE>4.819945</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2305">
		<LATITUDE>46.416397</LATITUDE>
		<LONGITUDE>4.820058</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2310">
		<LATITUDE>46.416362</LATITUDE>
		<LONGITUDE>4.82017</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2315">
		<LATITUDE>46.41633</LATITUDE>
		<LONGITUDE>4.820277</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2320">
		<LATITUDE>46.416293</LATITUDE>
		<LONGITUDE>4.820378</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2325">
		<LATITUDE>46.416258</LATITUDE>
		<LONGITUDE>4.820488</LONGITUDE>
		<ELEVATION>245</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2330">
		<LATITUDE>46.416223</LATITUDE>
		<LONGITUDE>4.8206</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2335">
		<LATITUDE>46.416187</LATITUDE>
		<LONGITUDE>4.820708</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2340">
		<LATITUDE>46.416158</LATITUDE>
		<LONGITUDE>4.82082</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2345">
		<LATITUDE>46.416128</LATITUDE>
		<LONGITUDE>4.82092</LONGITUDE>
		<ELEVATION>246</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2350">
		<LATITUDE>46.41609</LATITUDE>
		<LONGITUDE>4.821028</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2355">
		<LATITUDE>46.416057</LATITUDE>
		<LONGITUDE>4.821127</LONGITUDE>
		<ELEVATION>247</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2360">
		<LATITUDE>46.416028</LATITUDE>
		<LONGITUDE>4.821213</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2365">
		<LATITUDE>46.415992</LATITUDE>
		<LONGITUDE>4.821312</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2370">
		<LATITUDE>46.415957</LATITUDE>
		<LONGITUDE>4.821423</LONGITUDE>
		<ELEVATION>248</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2375">
		<LATITUDE>46.415925</LATITUDE>
		<LONGITUDE>4.821525</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2380">
		<LATITUDE>46.41589</LATITUDE>
		<LONGITUDE>4.821628</LONGITUDE>
		<ELEVATION>249</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2385">
		<LATITUDE>46.415857</LATITUDE>
		<LONGITUDE>4.82174</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2390">
		<LATITUDE>46.415822</LATITUDE>
		<LONGITUDE>4.821842</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2395">
		<LATITUDE>46.415782</LATITUDE>
		<LONGITUDE>4.821945</LONGITUDE>
		<ELEVATION>250</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2400">
		<LATITUDE>46.415745</LATITUDE>
		<LONGITUDE>4.82205</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2405">
		<LATITUDE>46.415728</LATITUDE>
		<LONGITUDE>4.822147</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2410">
		<LATITUDE>46.415768</LATITUDE>
		<LONGITUDE>4.822225</LONGITUDE>
		<ELEVATION>251</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2415">
		<LATITUDE>46.41584</LATITUDE>
		<LONGITUDE>4.822265</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2420">
		<LATITUDE>46.415912</LATITUDE>
		<LONGITUDE>4.822297</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2425">
		<LATITUDE>46.41597</LATITUDE>
		<LONGITUDE>4.822312</LONGITUDE>
		<ELEVATION>252</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2430">
		<LATITUDE>46.416042</LATITUDE>
		<LONGITUDE>4.822333</LONGITUDE>
		<ELEVATION>253</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2435">
		<LATITUDE>46.416125</LATITUDE>
		<LONGITUDE>4.822375</LONGITUDE>
		<ELEVATION>253</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2440">
		<LATITUDE>46.416202</LATITUDE>
		<LONGITUDE>4.822417</LONGITUDE>
		<ELEVATION>254</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2445">
		<LATITUDE>46.416282</LATITUDE>
		<LONGITUDE>4.82246</LONGITUDE>
		<ELEVATION>254</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2450">
		<LATITUDE>46.416367</LATITUDE>
		<LONGITUDE>4.822487</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2455">
		<LATITUDE>46.416442</LATITUDE>
		<LONGITUDE>4.822497</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2460">
		<LATITUDE>46.41652</LATITUDE>
		<LONGITUDE>4.822507</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2465">
		<LATITUDE>46.416608</LATITUDE>
		<LONGITUDE>4.822548</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2470">
		<LATITUDE>46.416695</LATITUDE>
		<LONGITUDE>4.822578</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2475">
		<LATITUDE>46.41677</LATITUDE>
		<LONGITUDE>4.822625</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2480">
		<LATITUDE>46.416838</LATITUDE>
		<LONGITUDE>4.822683</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2485">
		<LATITUDE>46.416912</LATITUDE>
		<LONGITUDE>4.822727</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2490">
		<LATITUDE>46.416973</LATITUDE>
		<LONGITUDE>4.822773</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2495">
		<LATITUDE>46.41704</LATITUDE>
		<LONGITUDE>4.822823</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2500">
		<LATITUDE>46.41711</LATITUDE>
		<LONGITUDE>4.822883</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2505">
		<LATITUDE>46.417183</LATITUDE>
		<LONGITUDE>4.822937</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2510">
		<LATITUDE>46.417252</LATITUDE>
		<LONGITUDE>4.823002</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2515">
		<LATITUDE>46.41732</LATITUDE>
		<LONGITUDE>4.823062</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2520">
		<LATITUDE>46.417388</LATITUDE>
		<LONGITUDE>4.823112</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2525">
		<LATITUDE>46.417462</LATITUDE>
		<LONGITUDE>4.82317</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2530">
		<LATITUDE>46.417543</LATITUDE>
		<LONGITUDE>4.823228</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2535">
		<LATITUDE>46.417622</LATITUDE>
		<LONGITUDE>4.823288</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2540">
		<LATITUDE>46.417695</LATITUDE>
		<LONGITUDE>4.823352</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2545">
		<LATITUDE>46.417757</LATITUDE>
		<LONGITUDE>4.823417</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2550">
		<LATITUDE>46.417825</LATITUDE>
		<LONGITUDE>4.823475</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2555">
		<LATITUDE>46.417888</LATITUDE>
		<LONGITUDE>4.823548</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2560">
		<LATITUDE>46.417972</LATITUDE>
		<LONGITUDE>4.823577</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2565">
		<LATITUDE>46.418038</LATITUDE>
		<LONGITUDE>4.823623</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2570">
		<LATITUDE>46.41812</LATITUDE>
		<LONGITUDE>4.823668</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2575">
		<LATITUDE>46.418195</LATITUDE>
		<LONGITUDE>4.823707</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2580">
		<LATITUDE>46.41827</LATITUDE>
		<LONGITUDE>4.823753</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2585">
		<LATITUDE>46.418358</LATITUDE>
		<LONGITUDE>4.8238</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2590">
		<LATITUDE>46.418432</LATITUDE>
		<LONGITUDE>4.823842</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2595">
		<LATITUDE>46.418515</LATITUDE>
		<LONGITUDE>4.823887</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2600">
		<LATITUDE>46.418593</LATITUDE>
		<LONGITUDE>4.823938</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2605">
		<LATITUDE>46.418662</LATITUDE>
		<LONGITUDE>4.82399</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2610">
		<LATITUDE>46.418733</LATITUDE>
		<LONGITUDE>4.824053</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2615">
		<LATITUDE>46.418805</LATITUDE>
		<LONGITUDE>4.82411</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2620">
		<LATITUDE>46.418875</LATITUDE>
		<LONGITUDE>4.824168</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2625">
		<LATITUDE>46.418948</LATITUDE>
		<LONGITUDE>4.824215</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2630">
		<LATITUDE>46.419025</LATITUDE>
		<LONGITUDE>4.824245</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2635">
		<LATITUDE>46.419105</LATITUDE>
		<LONGITUDE>4.824272</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2640">
		<LATITUDE>46.419187</LATITUDE>
		<LONGITUDE>4.824292</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2645">
		<LATITUDE>46.419262</LATITUDE>
		<LONGITUDE>4.824313</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2650">
		<LATITUDE>46.419345</LATITUDE>
		<LONGITUDE>4.824335</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2655">
		<LATITUDE>46.419428</LATITUDE>
		<LONGITUDE>4.824365</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2660">
		<LATITUDE>46.419505</LATITUDE>
		<LONGITUDE>4.824395</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2665">
		<LATITUDE>46.419603</LATITUDE>
		<LONGITUDE>4.824435</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2670">
		<LATITUDE>46.41968</LATITUDE>
		<LONGITUDE>4.82447</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2675">
		<LATITUDE>46.419753</LATITUDE>
		<LONGITUDE>4.824525</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2680">
		<LATITUDE>46.419825</LATITUDE>
		<LONGITUDE>4.824578</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2685">
		<LATITUDE>46.419885</LATITUDE>
		<LONGITUDE>4.82465</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2690">
		<LATITUDE>46.419948</LATITUDE>
		<LONGITUDE>4.824723</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2695">
		<LATITUDE>46.420008</LATITUDE>
		<LONGITUDE>4.824795</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2700">
		<LATITUDE>46.42007</LATITUDE>
		<LONGITUDE>4.824873</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2705">
		<LATITUDE>46.420127</LATITUDE>
		<LONGITUDE>4.824958</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2710">
		<LATITUDE>46.420192</LATITUDE>
		<LONGITUDE>4.825037</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2715">
		<LATITUDE>46.420268</LATITUDE>
		<LONGITUDE>4.825093</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2720">
		<LATITUDE>46.420345</LATITUDE>
		<LONGITUDE>4.825143</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2725">
		<LATITUDE>46.420417</LATITUDE>
		<LONGITUDE>4.825207</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2730">
		<LATITUDE>46.420483</LATITUDE>
		<LONGITUDE>4.825253</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2735">
		<LATITUDE>46.420553</LATITUDE>
		<LONGITUDE>4.8253</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2740">
		<LATITUDE>46.420623</LATITUDE>
		<LONGITUDE>4.825355</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2745">
		<LATITUDE>46.420698</LATITUDE>
		<LONGITUDE>4.825395</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2750">
		<LATITUDE>46.420773</LATITUDE>
		<LONGITUDE>4.825437</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2755">
		<LATITUDE>46.420848</LATITUDE>
		<LONGITUDE>4.825472</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2760">
		<LATITUDE>46.42092</LATITUDE>
		<LONGITUDE>4.82552</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2765">
		<LATITUDE>46.42099</LATITUDE>
		<LONGITUDE>4.825558</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2770">
		<LATITUDE>46.421057</LATITUDE>
		<LONGITUDE>4.825593</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2775">
		<LATITUDE>46.421132</LATITUDE>
		<LONGITUDE>4.82565</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2780">
		<LATITUDE>46.421205</LATITUDE>
		<LONGITUDE>4.825692</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2785">
		<LATITUDE>46.421265</LATITUDE>
		<LONGITUDE>4.825717</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2790">
		<LATITUDE>46.421342</LATITUDE>
		<LONGITUDE>4.825763</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2795">
		<LATITUDE>46.421423</LATITUDE>
		<LONGITUDE>4.825807</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2800">
		<LATITUDE>46.4215</LATITUDE>
		<LONGITUDE>4.82584</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2805">
		<LATITUDE>46.421587</LATITUDE>
		<LONGITUDE>4.825872</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2810">
		<LATITUDE>46.42166</LATITUDE>
		<LONGITUDE>4.825903</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2815">
		<LATITUDE>46.421732</LATITUDE>
		<LONGITUDE>4.825932</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2820">
		<LATITUDE>46.42181</LATITUDE>
		<LONGITUDE>4.825962</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2825">
		<LATITUDE>46.42189</LATITUDE>
		<LONGITUDE>4.826012</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2830">
		<LATITUDE>46.421968</LATITUDE>
		<LONGITUDE>4.82606</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2835">
		<LATITUDE>46.42203</LATITUDE>
		<LONGITUDE>4.826092</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2840">
		<LATITUDE>46.422102</LATITUDE>
		<LONGITUDE>4.826132</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2845">
		<LATITUDE>46.422178</LATITUDE>
		<LONGITUDE>4.82619</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2850">
		<LATITUDE>46.422252</LATITUDE>
		<LONGITUDE>4.826232</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2855">
		<LATITUDE>46.42232</LATITUDE>
		<LONGITUDE>4.826273</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2860">
		<LATITUDE>46.4224</LATITUDE>
		<LONGITUDE>4.82633</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2865">
		<LATITUDE>46.422473</LATITUDE>
		<LONGITUDE>4.82637</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2870">
		<LATITUDE>46.422537</LATITUDE>
		<LONGITUDE>4.8264</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2875">
		<LATITUDE>46.422613</LATITUDE>
		<LONGITUDE>4.826452</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2880">
		<LATITUDE>46.422688</LATITUDE>
		<LONGITUDE>4.826497</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2885">
		<LATITUDE>46.422753</LATITUDE>
		<LONGITUDE>4.826528</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2890">
		<LATITUDE>46.422833</LATITUDE>
		<LONGITUDE>4.82657</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2895">
		<LATITUDE>46.422915</LATITUDE>
		<LONGITUDE>4.8266</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2900">
		<LATITUDE>46.422982</LATITUDE>
		<LONGITUDE>4.82662</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2905">
		<LATITUDE>46.423055</LATITUDE>
		<LONGITUDE>4.826643</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2910">
		<LATITUDE>46.423137</LATITUDE>
		<LONGITUDE>4.826665</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2915">
		<LATITUDE>46.423212</LATITUDE>
		<LONGITUDE>4.826688</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2920">
		<LATITUDE>46.423282</LATITUDE>
		<LONGITUDE>4.826708</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2925">
		<LATITUDE>46.42336</LATITUDE>
		<LONGITUDE>4.826745</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2930">
		<LATITUDE>46.42344</LATITUDE>
		<LONGITUDE>4.826758</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2935">
		<LATITUDE>46.423513</LATITUDE>
		<LONGITUDE>4.82676</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2940">
		<LATITUDE>46.423597</LATITUDE>
		<LONGITUDE>4.826767</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2945">
		<LATITUDE>46.423677</LATITUDE>
		<LONGITUDE>4.826787</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2950">
		<LATITUDE>46.42376</LATITUDE>
		<LONGITUDE>4.82679</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2955">
		<LATITUDE>46.42384</LATITUDE>
		<LONGITUDE>4.826807</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2960">
		<LATITUDE>46.423917</LATITUDE>
		<LONGITUDE>4.826823</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2965">
		<LATITUDE>46.423997</LATITUDE>
		<LONGITUDE>4.826845</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2970">
		<LATITUDE>46.424068</LATITUDE>
		<LONGITUDE>4.82687</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2975">
		<LATITUDE>46.424143</LATITUDE>
		<LONGITUDE>4.826888</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2980">
		<LATITUDE>46.42421</LATITUDE>
		<LONGITUDE>4.826908</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2985">
		<LATITUDE>46.424278</LATITUDE>
		<LONGITUDE>4.826947</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2990">
		<LATITUDE>46.424353</LATITUDE>
		<LONGITUDE>4.826993</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="2995">
		<LATITUDE>46.424432</LATITUDE>
		<LONGITUDE>4.827025</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3000">
		<LATITUDE>46.424503</LATITUDE>
		<LONGITUDE>4.827088</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3005">
		<LATITUDE>46.424572</LATITUDE>
		<LONGITUDE>4.827155</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3010">
		<LATITUDE>46.424653</LATITUDE>
		<LONGITUDE>4.827208</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3015">
		<LATITUDE>46.424733</LATITUDE>
		<LONGITUDE>4.82725</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3020">
		<LATITUDE>46.424802</LATITUDE>
		<LONGITUDE>4.82729</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3025">
		<LATITUDE>46.424878</LATITUDE>
		<LONGITUDE>4.827337</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3030">
		<LATITUDE>46.424957</LATITUDE>
		<LONGITUDE>4.827363</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3035">
		<LATITUDE>46.425032</LATITUDE>
		<LONGITUDE>4.827385</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3040">
		<LATITUDE>46.425095</LATITUDE>
		<LONGITUDE>4.827417</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3045">
		<LATITUDE>46.425175</LATITUDE>
		<LONGITUDE>4.827442</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3050">
		<LATITUDE>46.425258</LATITUDE>
		<LONGITUDE>4.827465</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3055">
		<LATITUDE>46.425348</LATITUDE>
		<LONGITUDE>4.827487</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3060">
		<LATITUDE>46.425433</LATITUDE>
		<LONGITUDE>4.827498</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3065">
		<LATITUDE>46.425505</LATITUDE>
		<LONGITUDE>4.827513</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3070">
		<LATITUDE>46.425582</LATITUDE>
		<LONGITUDE>4.827517</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3075">
		<LATITUDE>46.425655</LATITUDE>
		<LONGITUDE>4.827512</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3080">
		<LATITUDE>46.425732</LATITUDE>
		<LONGITUDE>4.827517</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3085">
		<LATITUDE>46.425812</LATITUDE>
		<LONGITUDE>4.82752</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3090">
		<LATITUDE>46.425892</LATITUDE>
		<LONGITUDE>4.827553</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3095">
		<LATITUDE>46.425965</LATITUDE>
		<LONGITUDE>4.827553</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3100">
		<LATITUDE>46.426032</LATITUDE>
		<LONGITUDE>4.827557</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3105">
		<LATITUDE>46.426108</LATITUDE>
		<LONGITUDE>4.827575</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3110">
		<LATITUDE>46.426188</LATITUDE>
		<LONGITUDE>4.827607</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3115">
		<LATITUDE>46.426267</LATITUDE>
		<LONGITUDE>4.827597</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3120">
		<LATITUDE>46.426347</LATITUDE>
		<LONGITUDE>4.827607</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3125">
		<LATITUDE>46.426435</LATITUDE>
		<LONGITUDE>4.82763</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3130">
		<LATITUDE>46.426523</LATITUDE>
		<LONGITUDE>4.82767</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3135">
		<LATITUDE>46.426605</LATITUDE>
		<LONGITUDE>4.8277</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3140">
		<LATITUDE>46.426675</LATITUDE>
		<LONGITUDE>4.82773</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3145">
		<LATITUDE>46.426748</LATITUDE>
		<LONGITUDE>4.827762</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3150">
		<LATITUDE>46.426827</LATITUDE>
		<LONGITUDE>4.827807</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3155">
		<LATITUDE>46.4269</LATITUDE>
		<LONGITUDE>4.827853</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3160">
		<LATITUDE>46.42697</LATITUDE>
		<LONGITUDE>4.827917</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3165">
		<LATITUDE>46.427042</LATITUDE>
		<LONGITUDE>4.827982</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3170">
		<LATITUDE>46.427112</LATITUDE>
		<LONGITUDE>4.828045</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3175">
		<LATITUDE>46.427178</LATITUDE>
		<LONGITUDE>4.828098</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3180">
		<LATITUDE>46.427248</LATITUDE>
		<LONGITUDE>4.828153</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3185">
		<LATITUDE>46.427325</LATITUDE>
		<LONGITUDE>4.8282</LONGITUDE>
		<ELEVATION>269</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3190">
		<LATITUDE>46.427393</LATITUDE>
		<LONGITUDE>4.828247</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3195">
		<LATITUDE>46.427467</LATITUDE>
		<LONGITUDE>4.82829</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3200">
		<LATITUDE>46.427548</LATITUDE>
		<LONGITUDE>4.828347</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3205">
		<LATITUDE>46.42762</LATITUDE>
		<LONGITUDE>4.828392</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3210">
		<LATITUDE>46.427695</LATITUDE>
		<LONGITUDE>4.828428</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3215">
		<LATITUDE>46.42777</LATITUDE>
		<LONGITUDE>4.828488</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3220">
		<LATITUDE>46.427848</LATITUDE>
		<LONGITUDE>4.82855</LONGITUDE>
		<ELEVATION>268</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3225">
		<LATITUDE>46.427922</LATITUDE>
		<LONGITUDE>4.828602</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3230">
		<LATITUDE>46.428007</LATITUDE>
		<LONGITUDE>4.828653</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3235">
		<LATITUDE>46.42808</LATITUDE>
		<LONGITUDE>4.828715</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3240">
		<LATITUDE>46.42815</LATITUDE>
		<LONGITUDE>4.828775</LONGITUDE>
		<ELEVATION>267</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3245">
		<LATITUDE>46.428227</LATITUDE>
		<LONGITUDE>4.82884</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3250">
		<LATITUDE>46.428303</LATITUDE>
		<LONGITUDE>4.828905</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3255">
		<LATITUDE>46.428383</LATITUDE>
		<LONGITUDE>4.828953</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3260">
		<LATITUDE>46.42846</LATITUDE>
		<LONGITUDE>4.82899</LONGITUDE>
		<ELEVATION>266</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3265">
		<LATITUDE>46.428532</LATITUDE>
		<LONGITUDE>4.829028</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3270">
		<LATITUDE>46.42861</LATITUDE>
		<LONGITUDE>4.829045</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3275">
		<LATITUDE>46.428697</LATITUDE>
		<LONGITUDE>4.829087</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3280">
		<LATITUDE>46.428768</LATITUDE>
		<LONGITUDE>4.82913</LONGITUDE>
		<ELEVATION>265</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3285">
		<LATITUDE>46.428845</LATITUDE>
		<LONGITUDE>4.829175</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3290">
		<LATITUDE>46.428922</LATITUDE>
		<LONGITUDE>4.829213</LONGITUDE>
		<ELEVATION>264</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3295">
		<LATITUDE>46.428992</LATITUDE>
		<LONGITUDE>4.829278</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3300">
		<LATITUDE>46.429053</LATITUDE>
		<LONGITUDE>4.82935</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3305">
		<LATITUDE>46.429107</LATITUDE>
		<LONGITUDE>4.82943</LONGITUDE>
		<ELEVATION>263</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3310">
		<LATITUDE>46.429152</LATITUDE>
		<LONGITUDE>4.829525</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3315">
		<LATITUDE>46.429208</LATITUDE>
		<LONGITUDE>4.829612</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3320">
		<LATITUDE>46.429263</LATITUDE>
		<LONGITUDE>4.829702</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3325">
		<LATITUDE>46.429312</LATITUDE>
		<LONGITUDE>4.829795</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3330">
		<LATITUDE>46.429362</LATITUDE>
		<LONGITUDE>4.829883</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3335">
		<LATITUDE>46.42942</LATITUDE>
		<LONGITUDE>4.829975</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3340">
		<LATITUDE>46.42947</LATITUDE>
		<LONGITUDE>4.830055</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3345">
		<LATITUDE>46.429522</LATITUDE>
		<LONGITUDE>4.83014</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3350">
		<LATITUDE>46.429578</LATITUDE>
		<LONGITUDE>4.830238</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3355">
		<LATITUDE>46.42962</LATITUDE>
		<LONGITUDE>4.830353</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3360">
		<LATITUDE>46.42967</LATITUDE>
		<LONGITUDE>4.830457</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3365">
		<LATITUDE>46.42973</LATITUDE>
		<LONGITUDE>4.83053</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3370">
		<LATITUDE>46.429793</LATITUDE>
		<LONGITUDE>4.830592</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3375">
		<LATITUDE>46.429855</LATITUDE>
		<LONGITUDE>4.830668</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3380">
		<LATITUDE>46.429917</LATITUDE>
		<LONGITUDE>4.830747</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3385">
		<LATITUDE>46.42998</LATITUDE>
		<LONGITUDE>4.830822</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3390">
		<LATITUDE>46.430035</LATITUDE>
		<LONGITUDE>4.830912</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3395">
		<LATITUDE>46.430088</LATITUDE>
		<LONGITUDE>4.830993</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3400">
		<LATITUDE>46.430145</LATITUDE>
		<LONGITUDE>4.831077</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3405">
		<LATITUDE>46.430207</LATITUDE>
		<LONGITUDE>4.831163</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3410">
		<LATITUDE>46.430262</LATITUDE>
		<LONGITUDE>4.831245</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3415">
		<LATITUDE>46.430318</LATITUDE>
		<LONGITUDE>4.831322</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3420">
		<LATITUDE>46.430377</LATITUDE>
		<LONGITUDE>4.831405</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3425">
		<LATITUDE>46.430432</LATITUDE>
		<LONGITUDE>4.831495</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3430">
		<LATITUDE>46.430497</LATITUDE>
		<LONGITUDE>4.83157</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3435">
		<LATITUDE>46.430555</LATITUDE>
		<LONGITUDE>4.831652</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3440">
		<LATITUDE>46.430612</LATITUDE>
		<LONGITUDE>4.831737</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3445">
		<LATITUDE>46.430673</LATITUDE>
		<LONGITUDE>4.831815</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3450">
		<LATITUDE>46.430738</LATITUDE>
		<LONGITUDE>4.831902</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3455">
		<LATITUDE>46.430795</LATITUDE>
		<LONGITUDE>4.83199</LONGITUDE>
		<ELEVATION>255</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3460">
		<LATITUDE>46.430852</LATITUDE>
		<LONGITUDE>4.832075</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3465">
		<LATITUDE>46.430905</LATITUDE>
		<LONGITUDE>4.832165</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3470">
		<LATITUDE>46.430928</LATITUDE>
		<LONGITUDE>4.832278</LONGITUDE>
		<ELEVATION>256</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3475">
		<LATITUDE>46.430957</LATITUDE>
		<LONGITUDE>4.832398</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3480">
		<LATITUDE>46.430987</LATITUDE>
		<LONGITUDE>4.832515</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3485">
		<LATITUDE>46.431002</LATITUDE>
		<LONGITUDE>4.832628</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3490">
		<LATITUDE>46.431012</LATITUDE>
		<LONGITUDE>4.832747</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3495">
		<LATITUDE>46.431038</LATITUDE>
		<LONGITUDE>4.832852</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3500">
		<LATITUDE>46.431067</LATITUDE>
		<LONGITUDE>4.832962</LONGITUDE>
		<ELEVATION>257</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3505">
		<LATITUDE>46.431097</LATITUDE>
		<LONGITUDE>4.833067</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3510">
		<LATITUDE>46.431143</LATITUDE>
		<LONGITUDE>4.833147</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3515">
		<LATITUDE>46.431205</LATITUDE>
		<LONGITUDE>4.83322</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3520">
		<LATITUDE>46.43128</LATITUDE>
		<LONGITUDE>4.833285</LONGITUDE>
		<ELEVATION>258</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3525">
		<LATITUDE>46.431348</LATITUDE>
		<LONGITUDE>4.83334</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3530">
		<LATITUDE>46.431417</LATITUDE>
		<LONGITUDE>4.833403</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3535">
		<LATITUDE>46.431488</LATITUDE>
		<LONGITUDE>4.83347</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3540">
		<LATITUDE>46.43156</LATITUDE>
		<LONGITUDE>4.833517</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3545">
		<LATITUDE>46.43163</LATITUDE>
		<LONGITUDE>4.833565</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3550">
		<LATITUDE>46.431717</LATITUDE>
		<LONGITUDE>4.833595</LONGITUDE>
		<ELEVATION>259</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3555">
		<LATITUDE>46.431785</LATITUDE>
		<LONGITUDE>4.83363</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3560">
		<LATITUDE>46.43186</LATITUDE>
		<LONGITUDE>4.833678</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3565">
		<LATITUDE>46.431928</LATITUDE>
		<LONGITUDE>4.833718</LONGITUDE>
		<ELEVATION>260</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3570">
		<LATITUDE>46.431993</LATITUDE>
		<LONGITUDE>4.833745</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3575">
		<LATITUDE>46.432075</LATITUDE>
		<LONGITUDE>4.833788</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3580">
		<LATITUDE>46.432148</LATITUDE>
		<LONGITUDE>4.833825</LONGITUDE>
		<ELEVATION>261</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3585">
		<LATITUDE>46.432225</LATITUDE>
		<LONGITUDE>4.833857</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3590">
		<LATITUDE>46.432312</LATITUDE>
		<LONGITUDE>4.83389</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3595">
		<LATITUDE>46.432393</LATITUDE>
		<LONGITUDE>4.833898</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
	<LOCATION elapsed_time="3600">
		<LATITUDE>46.432468</LATITUDE>
		<LONGITUDE>4.833902</LONGITUDE>
		<ELEVATION>262</ELEVATION>
	</LOCATION>
                </TRACK>
                            <CONNECTEDDEVICE>
        <ID></ID>
        <SERIAL></SERIAL>
        <MODELID></MODELID>
        <FIRMWAREID></FIRMWAREID>
        <OWNERSHIP></OWNERSHIP>
        <CREATED_AT></CREATED_AT>
        <LASTCONNECT></LASTCONNECT>
    </CONNECTEDDEVICE>
	</ACTIVITY>

</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivityFullActivity\Response', 'xml');
    }
}
