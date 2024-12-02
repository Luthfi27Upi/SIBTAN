/*==============================================================*/
/* DBMS name:      Microsoft SQL Server 2012                    */
/* Created on:     02/11/2024 04:59:29                          */
/*==============================================================*/


if exists (select 1
   from sys.sysreferences r join sys.sysobjects o on (o.id = r.constid and o.type = 'F')
   where r.fkeyid = object_id('DATA_ADMIN') and o.name = 'FK_DATA_ADM_BERISI_AD_USER')
alter table DATA_ADMIN
   drop constraint FK_DATA_ADM_BERISI_AD_USER
go

if exists (select 1
   from sys.sysreferences r join sys.sysobjects o on (o.id = r.constid and o.type = 'F')
   where r.fkeyid = object_id('DATA_MHS') and o.name = 'FK_DATA_MHS_BERISI_MH_USER')
alter table DATA_MHS
   drop constraint FK_DATA_MHS_BERISI_MH_USER
go

if exists (select 1
   from sys.sysreferences r join sys.sysobjects o on (o.id = r.constid and o.type = 'F')
   where r.fkeyid = object_id('FILES') and o.name = 'FK_FILES_UPLOAD_USER')
alter table FILES
   drop constraint FK_FILES_UPLOAD_USER
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('DATA_ADMIN')
            and   name  = 'BERISI_ADMIN_FK'
            and   indid > 0
            and   indid < 255)
   drop index DATA_ADMIN.BERISI_ADMIN_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('DATA_ADMIN')
            and   type = 'U')
   drop table DATA_ADMIN
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('DATA_MHS')
            and   name  = 'BERISI_MHS_FK'
            and   indid > 0
            and   indid < 255)
   drop index DATA_MHS.BERISI_MHS_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('DATA_MHS')
            and   type = 'U')
   drop table DATA_MHS
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('FILES')
            and   name  = 'UPLOAD_FK'
            and   indid > 0
            and   indid < 255)
   drop index FILES.UPLOAD_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('FILES')
            and   type = 'U')
   drop table FILES
go

if exists (select 1
            from  sysobjects
           where  id = object_id('"USER"')
            and   type = 'U')
   drop table "USER"
go

/*==============================================================*/
/* Table: DATA_ADMIN                                            */
/*==============================================================*/
create table DATA_ADMIN (
   ID_ADM               int                  not null,
   ID                   int                  null,
   JURUSAN              varchar(200)         null,
   constraint PK_DATA_ADMIN primary key nonclustered (ID_ADM)
)
go

/*==============================================================*/
/* Index: BERISI_ADMIN_FK                                       */
/*==============================================================*/
create index BERISI_ADMIN_FK on DATA_ADMIN (
ID ASC
)
go

/*==============================================================*/
/* Table: DATA_MHS                                              */
/*==============================================================*/
create table DATA_MHS (
   ID_MHS               int                  not null,
   ID                   int                  null,
   JURUSAN              varchar(200)         null,
   constraint PK_DATA_MHS primary key nonclustered (ID_MHS)
)
go

/*==============================================================*/
/* Index: BERISI_MHS_FK                                         */
/*==============================================================*/
create index BERISI_MHS_FK on DATA_MHS (
ID ASC
)
go

/*==============================================================*/
/* Table: FILES                                                 */
/*==============================================================*/
create table FILES (
   ID_FILES             int                  not null,
   ID                   int                  null,
   FILE_NAME            varchar(255)         null,
   FILE_PATH            varchar(255)         null,
   UPLOAD_AT            datetime             null,
   STATUS               varchar(50)          null,
   constraint PK_FILES primary key nonclustered (ID_FILES)
)
go
/*==============================================================*/
/* Index: UPLOAD_FK                                             */
/*==============================================================*/
create index UPLOAD_FK on FILES (
ID ASC
)
go

/*==============================================================*/
/* Table: "USER"                                                */
/*==============================================================*/
create table "USER" (
   ID                   int                  not null,
   PASSWORD             varchar(100)         null,
   EMAIL                varchar(100)         null,
   JENIS_KELAMIN        bit                  null,
   NO_HP                varchar(15)          null,
   NIM                  varchar(15)          null,
   ALAMAT               varchar(200)         null,
   USERNAME             varchar(100)         null,
   ROLE                 varchar(20)          null,
   reset_token          VARCHAR(255)         null,
   reset_token_expiry   DATETIME             null,
   foto                 VARCHAR(255)         null,
   tempat_lahir         VARCHAR(255)         null,
   tanggal_lahir        DATE                 null,
   constraint PK_USER primary key nonclustered (ID)
)
go

alter table DATA_ADMIN
   add constraint FK_DATA_ADM_BERISI_AD_USER foreign key (ID)
      references "USER" (ID)
go

alter table DATA_MHS
   add constraint FK_DATA_MHS_BERISI_MH_USER foreign key (ID)
      references "USER" (ID)
go

alter table FILES
   add constraint FK_FILES_UPLOAD_USER foreign key (ID)
      references "USER" (ID)
go

