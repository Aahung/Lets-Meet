

# Lets Meet #



## Abstract ##

an app to gather willingness of each even participants to brainstorm and vote for their meet.

Lets Meet will be open sourced on Github :-) 



## What does it do? ##

- Admin can create a meet, invite people to join the meet
- One can create meet options, and only he or she can edit
- anyone can comment on an option and persuade option owner to make changes
- each member ticks the available days and preferred options



## Parts ##



### Server side ###



#### Database to store the ####



- Meet [Table]
  - Meet_Id
  - Brief
  - User_Id



- Option [Table] 
  - Option_Id
  - Brie
  - Pros
  - Cons
  - User_Id



- User [Table]
  - User_Id
  - Alias
  - Facebook
  - QQ
  - Email


- Comment [Table]
  - Option_Id
  - User_Id
  - Content
  - Time



- Meet_Option_Junction [Table]
  - Meet_Id 
  - Option_Id 



- Meet_User_Junction [Table]
  - Meet_Id
  - User_Id


- Availibility [Table]
  - Meet_Id
  - User_Id
  - Available_Day



- Preference [Table]
  - Option_Id
  - User_Id
  - Rate


### Client Side ###
#### Web App
#### Mobile App

## Connectivily ##
- Facebook
- QQ
- Email

