<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetReferenceDatatypesMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceDatatypes';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse(SerializerInterface $serializer, $data)
    {
        return $serializer->deserialize('
<RESPONSE>
	<META>
		<STATUSCODE>200</STATUSCODE>
		<MESSAGE>OK : done</MESSAGE>
	</META>
	<DATATYPES>
		<DATATYPE>
			<ID>1</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>2</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>3</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>4</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>5</ID>
			<UNIT>m</UNIT>
			<NAME>Distance</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>6</ID>
			<UNIT>m/h</UNIT>
			<NAME>Speed current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>7</ID>
			<UNIT>m/h</UNIT>
			<NAME>Speed max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>8</ID>
			<UNIT>m/h</UNIT>
			<NAME>Speed min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>9</ID>
			<UNIT>m/h</UNIT>
			<NAME>Speed avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>10</ID>
			<UNIT>steps/min</UNIT>
			<NAME>Cadence current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>11</ID>
			<UNIT>steps/min</UNIT>
			<NAME>Cadence max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>12</ID>
			<UNIT>steps/min</UNIT>
			<NAME>Cadence min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>13</ID>
			<UNIT>steps/min</UNIT>
			<NAME>Cadence avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>14</ID>
			<UNIT>m</UNIT>
			<NAME>Elevation current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>15</ID>
			<UNIT>m</UNIT>
			<NAME>Elevation max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>16</ID>
			<UNIT>m</UNIT>
			<NAME>Elevation min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>17</ID>
			<UNIT>m</UNIT>
			<NAME>Elevation avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>18</ID>
			<UNIT>m</UNIT>
			<NAME>Ascent</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>19</ID>
			<UNIT>m</UNIT>
			<NAME>Descent</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>20</ID>
			<UNIT>bool</UNIT>
			<NAME>Lap</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>21</ID>
			<UNIT>s</UNIT>
			<NAME>Break Time</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>22</ID>
			<UNIT>kg</UNIT>
			<NAME>Weight, in kilograms</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>23</ID>
			<UNIT>kcal</UNIT>
			<NAME>Calories burnt</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>24</ID>
			<UNIT>s</UNIT>
			<NAME>Duration</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>25</ID>
			<UNIT>%</UNIT>
			<NAME>Percentage of HRM minimum</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>26</ID>
			<UNIT>%</UNIT>
			<NAME>Percentage of HRM maximum</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>27</ID>
			<UNIT>cm</UNIT>
			<NAME>Height</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>28</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR Rest</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>29</ID>
			<UNIT>steps</UNIT>
			<NAME>Step number</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>30</ID>
			<UNIT>s</UNIT>
			<NAME>Active time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>32</ID>
			<UNIT>s</UNIT>
			<NAME>Average Lap Time</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>33</ID>
			<UNIT></UNIT>
			<NAME>Length Number</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>34</ID>
			<UNIT></UNIT>
			<NAME>Lap Length</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>35</ID>
			<UNIT>stairs</UNIT>
			<NAME>Stairs number</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>36</ID>
			<UNIT></UNIT>
			<NAME>Mode</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>37</ID>
			<UNIT>s</UNIT>
			<NAME>Walking time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>38</ID>
			<UNIT>s</UNIT>
			<NAME>Running time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>39</ID>
			<UNIT></UNIT>
			<NAME>Music Track</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>40</ID>
			<UNIT></UNIT>
			<NAME>Laps Number</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>41</ID>
			<UNIT>g</UNIT>
			<NAME>Fat burn</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>42</ID>
			<UNIT>%</UNIT>
			<NAME>Time in zone</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>43</ID>
			<UNIT></UNIT>
			<NAME>Exercise type</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>44</ID>
			<UNIT></UNIT>
			<NAME>Total strokes</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>45</ID>
			<UNIT></UNIT>
			<NAME>Total serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>46</ID>
			<UNIT></UNIT>
			<NAME>Total forehands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>47</ID>
			<UNIT></UNIT>
			<NAME>Total backhands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>48</ID>
			<UNIT></UNIT>
			<NAME>Stroke type</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>49</ID>
			<UNIT></UNIT>
			<NAME>Strokes in zone 1</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>50</ID>
			<UNIT></UNIT>
			<NAME>Strokes in zone 2</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>51</ID>
			<UNIT></UNIT>
			<NAME>Strokes in zone 3</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>52</ID>
			<UNIT></UNIT>
			<NAME>Stroke zone</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>53</ID>
			<UNIT></UNIT>
			<NAME>Winning or loosing point</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>54</ID>
			<UNIT>m/h</UNIT>
			<NAME>Ball Speed - current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>55</ID>
			<UNIT>m/h</UNIT>
			<NAME>Ball Speed - Min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>56</ID>
			<UNIT>m/h</UNIT>
			<NAME>Ball Speed - Max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>57</ID>
			<UNIT>m/h</UNIT>
			<NAME>Ball Speed - Avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>58</ID>
			<UNIT>s</UNIT>
			<NAME>Consecutive walking time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>59</ID>
			<UNIT></UNIT>
			<NAME>Centered forehands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>60</ID>
			<UNIT></UNIT>
			<NAME>Centered backhands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>61</ID>
			<UNIT></UNIT>
			<NAME>Centered serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>62</ID>
			<UNIT></UNIT>
			<NAME>Total winning forehands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>63</ID>
			<UNIT></UNIT>
			<NAME>Total loosing forehands</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>64</ID>
			<UNIT></UNIT>
			<NAME>Total winning backhands</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>65</ID>
			<UNIT></UNIT>
			<NAME>Total loosing backhands</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>66</ID>
			<UNIT></UNIT>
			<NAME>Total winning first serves</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>67</ID>
			<UNIT></UNIT>
			<NAME>Total winning second serves</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>68</ID>
			<UNIT></UNIT>
			<NAME>Total loosing second serves</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>69</ID>
			<UNIT></UNIT>
			<NAME>Total loosing first serves</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>70</ID>
			<UNIT></UNIT>
			<NAME>Total winning points</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>71</ID>
			<UNIT></UNIT>
			<NAME>Total loosing points</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>72</ID>
			<UNIT></UNIT>
			<NAME>Max consecutive winning point</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>73</ID>
			<UNIT></UNIT>
			<NAME>Total first serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>74</ID>
			<UNIT></UNIT>
			<NAME>Total second serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>75</ID>
			<UNIT></UNIT>
			<NAME>Total centered first serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>76</ID>
			<UNIT></UNIT>
			<NAME>Total centered second serves</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>77</ID>
			<UNIT>m/h</UNIT>
			<NAME>First serve ball Speed - Max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>78</ID>
			<UNIT>m/h</UNIT>
			<NAME>Second serve ball Speed - Max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>79</ID>
			<UNIT>m/h</UNIT>
			<NAME>First serve ball Speed - Avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>80</ID>
			<UNIT>m/h</UNIT>
			<NAME>Second serve ball Speed - Avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>81</ID>
			<UNIT></UNIT>
			<NAME>Total winning points on first serve</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>82</ID>
			<UNIT></UNIT>
			<NAME>Total winning points on second serve</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>83</ID>
			<UNIT>m/h</UNIT>
			<NAME>Successful First serve ball speed - Max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>84</ID>
			<UNIT>m/h</UNIT>
			<NAME>Successful First serve ball speed - Avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>85</ID>
			<UNIT></UNIT>
			<NAME>Total successful first serve</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>86</ID>
			<UNIT></UNIT>
			<NAME>Total successful centered first serve</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>87</ID>
			<UNIT>s</UNIT>
			<NAME>Match time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>88</ID>
			<UNIT>s</UNIT>
			<NAME>Training time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>89</ID>
			<UNIT></UNIT>
			<NAME>Total games</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>90</ID>
			<UNIT></UNIT>
			<NAME>Total break points</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>91</ID>
			<UNIT></UNIT>
			<NAME>Total break points won</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>92</ID>
			<UNIT></UNIT>
			<NAME>Total victory</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>93</ID>
			<UNIT></UNIT>
			<NAME>Total defeat</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>94</ID>
			<UNIT></UNIT>
			<NAME>Laterality</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>95</ID>
			<UNIT></UNIT>
			<NAME>Total match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>96</ID>
			<UNIT></UNIT>
			<NAME>Total training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>97</ID>
			<UNIT>Ons</UNIT>
			<NAME>Manual points</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>98</ID>
			<UNIT>nb</UNIT>
			<NAME>Activity number</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>99</ID>
			<UNIT>Ons</UNIT>
			<NAME>Points earned</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>100</ID>
			<UNIT>rpm</UNIT>
			<NAME>RPM current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>101</ID>
			<UNIT>rpm</UNIT>
			<NAME>RPM max</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>102</ID>
			<UNIT>rpm</UNIT>
			<NAME>RPM min</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>103</ID>
			<UNIT>rpm</UNIT>
			<NAME>RPM avg</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>104</ID>
			<UNIT></UNIT>
			<NAME>Total forehands during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>105</ID>
			<UNIT></UNIT>
			<NAME>Total backhands during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>106</ID>
			<UNIT></UNIT>
			<NAME>Total forehands during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>107</ID>
			<UNIT></UNIT>
			<NAME>Total backhands during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>108</ID>
			<UNIT></UNIT>
			<NAME>Total serves during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>109</ID>
			<UNIT></UNIT>
			<NAME>Total centered forehands during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>110</ID>
			<UNIT></UNIT>
			<NAME>Total centered backhands during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>111</ID>
			<UNIT></UNIT>
			<NAME>Total centered forehands during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>112</ID>
			<UNIT></UNIT>
			<NAME>Total centered backhands during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>113</ID>
			<UNIT></UNIT>
			<NAME>Total centered serves during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>114</ID>
			<UNIT></UNIT>
			<NAME>Total Trophies</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>115</ID>
			<UNIT>m/h</UNIT>
			<NAME>Serve ball speed average during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>116</ID>
			<UNIT>m/h</UNIT>
			<NAME>Serve ball speed max during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>117</ID>
			<UNIT></UNIT>
			<NAME>Max strokes during a point</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>118</ID>
			<UNIT></UNIT>
			<NAME>Max consecutive winning serves</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>119</ID>
			<UNIT>s</UNIT>
			<NAME>Walking duration</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>120</ID>
			<UNIT>m/h</UNIT>
			<NAME>Speed Device</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>121</ID>
			<UNIT>deg</UNIT>
			<NAME>Slope Device</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>122</ID>
			<UNIT></UNIT>
			<NAME>Pumps</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>123</ID>
			<UNIT></UNIT>
			<NAME>High knees</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>124</ID>
			<UNIT></UNIT>
			<NAME>Squats</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>125</ID>
			<UNIT>s</UNIT>
			<NAME>Introduction&#039;s duration</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>126</ID>
			<UNIT>s</UNIT>
			<NAME>Exercice&#039;s duration</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>127</ID>
			<UNIT>%</UNIT>
			<NAME>Stroke intensity</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>128</ID>
			<UNIT></UNIT>
			<NAME>Total serve without effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>129</ID>
			<UNIT></UNIT>
			<NAME>Total serve with effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>130</ID>
			<UNIT></UNIT>
			<NAME>Total forehands topspin</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>131</ID>
			<UNIT></UNIT>
			<NAME>Total forehands slice</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>132</ID>
			<UNIT></UNIT>
			<NAME>Total forehands flat</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>133</ID>
			<UNIT></UNIT>
			<NAME>Total backhands topspin</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>134</ID>
			<UNIT></UNIT>
			<NAME>Total backhands slice</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>135</ID>
			<UNIT></UNIT>
			<NAME>Total backhands flat</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>136</ID>
			<UNIT></UNIT>
			<NAME>Stroke type effect</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>137</ID>
			<UNIT></UNIT>
			<NAME>Total first serve without effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>138</ID>
			<UNIT></UNIT>
			<NAME>Total first serve with effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>139</ID>
			<UNIT></UNIT>
			<NAME>Total second serve without effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>140</ID>
			<UNIT></UNIT>
			<NAME>Total second serve with effect</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>141</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands topspin</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>142</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands slice</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>143</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands flat</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>144</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands topspin</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>145</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands slice</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>146</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands flat</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>147</ID>
			<UNIT>%</UNIT>
			<NAME>Total serves without effect during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>148</ID>
			<UNIT>%</UNIT>
			<NAME>Total serves with effect during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>149</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands topspin during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>150</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands slice during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>151</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands flat during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>152</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands topspin during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>153</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands slice during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>154</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands flat during a training</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>155</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands topspin during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>156</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands slice during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>157</ID>
			<UNIT>%</UNIT>
			<NAME>Total forehands flat during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>158</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands topspin during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>159</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands slice during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>160</ID>
			<UNIT>%</UNIT>
			<NAME>Total backhands flat during a match</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>161</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands topspin during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>162</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands slice during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>163</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands flat during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>164</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands topspin during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>165</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands slice during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>166</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands flat during a training</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>167</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands topspin during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>168</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands slice during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>169</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity forehands flat during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>170</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands topspin during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>171</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands slice during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>172</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity backhands flat during a match</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>173</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity max forehands</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>174</ID>
			<UNIT>%</UNIT>
			<NAME>Intensity max backhands</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>175</ID>
			<UNIT>%</UNIT>
			<NAME>Percentage of VMA</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>176</ID>
			<UNIT>%</UNIT>
			<NAME>Percentage of HRMAX current</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>177</ID>
			<UNIT></UNIT>
			<NAME>Bike trainer resistance</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>178</ID>
			<UNIT>W</UNIT>
			<NAME>Current home trainer power</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>179</ID>
			<UNIT>W</UNIT>
			<NAME>Maximum home trainer power</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>180</ID>
			<UNIT>W</UNIT>
			<NAME>Average home trainer power</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>181</ID>
			<UNIT>g</UNIT>
			<NAME>Weight</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>182</ID>
			<UNIT>%</UNIT>
			<NAME>Body fat percentage</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>183</ID>
			<UNIT>%</UNIT>
			<NAME>Percentage of PMA</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>184</ID>
			<UNIT>%</UNIT>
			<NAME>Body muscle percentage</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>185</ID>
			<UNIT>%</UNIT>
			<NAME>Body bone percentage</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>186</ID>
			<UNIT>%</UNIT>
			<NAME>Body water percentage</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>187</ID>
			<UNIT></UNIT>
			<NAME>ExerciseFlag</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>188</ID>
			<UNIT></UNIT>
			<NAME>ExercisePhaseFlag</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>189</ID>
			<UNIT></UNIT>
			<NAME>Borg Scale Slots</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>190</ID>
			<UNIT></UNIT>
			<NAME>BALANCE Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>191</ID>
			<UNIT></UNIT>
			<NAME>FLEXIBILITY Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>192</ID>
			<UNIT></UNIT>
			<NAME>PUMPS Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>193</ID>
			<UNIT></UNIT>
			<NAME>SQUATS Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>194</ID>
			<UNIT></UNIT>
			<NAME>LINING Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>195</ID>
			<UNIT></UNIT>
			<NAME>CARDIO Fit test result</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>196</ID>
			<UNIT>s</UNIT>
			<NAME>Sleeping Time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>197</ID>
			<UNIT>s</UNIT>
			<NAME>Light Sleeping Time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>198</ID>
			<UNIT>s</UNIT>
			<NAME>Deep Sleeping Time</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>199</ID>
			<UNIT>s</UNIT>
			<NAME>Bed Time</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>200</ID>
			<UNIT>s</UNIT>
			<NAME>Wakeup Time</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>201</ID>
			<UNIT>m/h</UNIT>
			<NAME>VMA</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>202</ID>
			<UNIT>W</UNIT>
			<NAME>PMA</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>203</ID>
			<UNIT></UNIT>
			<NAME>Score Fit Test</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>204</ID>
			<UNIT>deg</UNIT>
			<NAME>Max Slope Device</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>205</ID>
			<UNIT>deg</UNIT>
			<NAME>Avg Slope device</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>206</ID>
			<UNIT></UNIT>
			<NAME>Avg Bike Trainer Resistance</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>207</ID>
			<UNIT></UNIT>
			<NAME>Avg Bike Trainer Resistance</NAME>
			<CUMULABLE></CUMULABLE>
		</DATATYPE>
	</DATATYPES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceDatatypes\Response', 'xml');
    }
}
