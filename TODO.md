## Move Linkdata from Geonaute to this bundle - TODO List

### - ArrayObject : custom methods to check/re-implement
- Geonaute/Module/LinkdataBundle/Service/GetActivitySimilar/Activities.php
- Geonaute/Module/LinkdataBundle/Service/GetActivitySummary/About.php
- Geonaute/Module/LinkdataBundle/Service/GetFriends/FriendProfiles.php
- Geonaute/Module/LinkdataBundle/Service/GetGlobalChallenges/GlobalChallenges.php
- Geonaute/Module/LinkdataBundle/Service/GetReferenceDatatypes/Datatypes.php
- Geonaute/Module/LinkdataBundle/Service/GetReferenceDeviceModels/DeviceModels.php
- Geonaute/Module/LinkdataBundle/Service/GetReferenceSports/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetReferenceUnivers/UniversList.php
- Geonaute/Module/LinkdataBundle/Service/GetSession/Sections.php
- Geonaute/Module/LinkdataBundle/Service/GetShares/About.php
- Geonaute/Module/LinkdataBundle/Service/GetShares/TotalMonths.php
- Geonaute/Module/LinkdataBundle/Service/GetShares/TotalYears.php
- Geonaute/Module/LinkdataBundle/Service/GetStatisticsTags/Tags.php
- Geonaute/Module/LinkdataBundle/Service/GetTagTotalYear/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetTagWeeklyAverage/Datatypes.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivities/Activities.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivities/Datasummaries.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivitiesSports/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivitiesTags/Tags.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersChallenges/Challenges.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersConnectedDevices/ConnectedDevices.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersMeasures/Measures.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersRankingFriends/Ranking.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersRecords/Records.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersRecords/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersRoutes/Routes.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTags/Tags.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalMonths/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalMonths/TotalMonths.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalYear/Sports.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalYears/TotalYears.php

### - GetArrayCopy method used in classes to check/re-implement
- Geonaute/Module/LinkdataBundle/Service/GetActivityFullactivity/Activity.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivities/Response.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersMeasures/Response.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalMonths/Response.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalMonths/TotalMonth.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalYears/Response.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersTotalYears/TotalYear.php

### - GetClient method used in classes to check/re-implement
- Geonaute/Module/LinkdataBundle/Service/GetActivityDataSummary/Value.php
- Geonaute/Module/LinkdataBundle/Service/GetActivityFullactivity/Activity.php
- Geonaute/Module/LinkdataBundle/Service/GetActivitySimilar/Activity.php
- Geonaute/Module/LinkdataBundle/Service/GetActivitySummary/Activity.php
- Geonaute/Module/LinkdataBundle/Service/GetGlobalChallenges/GlobalChallenge.php
- Geonaute/Module/LinkdataBundle/Service/GetReferenceSports/Sport.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivities/Activity.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersActivitiesSports/Sport.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersConnectedDevices/ConnectedDevice.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersGlobalChallenge/GlobalChallenge.php
- Geonaute/Module/LinkdataBundle/Service/GetUsersRecords/Sports.php

### - Parameter "xml" in POST or PUT without XmlResponse
Before Response classes implements XmlResponse. It's removed now. We have to test if it always works or if we need to adapt or re-extends the XmlResponse class (deleted)

### - Use mock system to test all operations
Add tests on deserialization

### - Re-compare all files to check if nothing was lost
Compare files to be sure variables or functions not removed