CREATE TABLE public."user"(    id integer,    name character varying(40),    email character varying(40),    pass character varying(255),    notes text,    PRIMARY KEY (id))WITH (    OIDS = FALSE);ALTER TABLE public."user"    OWNER to wxpfcgdwrtkeuu;PGDMP     5    9                v            dfu4ugpnl0g4u6     10.3 (Ubuntu 10.3-1.pgdg16.04+1)    10.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    16381542    dfu4ugpnl0g4u6    DATABASE     �   CREATE DATABASE "dfu4ugpnl0g4u6" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';
     DROP DATABASE "dfu4ugpnl0g4u6";
             wxpfcgdwrtkeuu    false                        2615    2200    public    SCHEMA        CREATE SCHEMA "public";
    DROP SCHEMA "public";
             wxpfcgdwrtkeuu    false            �           0    0    SCHEMA "public"    COMMENT     8   COMMENT ON SCHEMA "public" IS 'standard public schema';
                  wxpfcgdwrtkeuu    false    7                        3079    13941    plpgsql 	   EXTENSION     C   CREATE EXTENSION IF NOT EXISTS "plpgsql" WITH SCHEMA "pg_catalog";
    DROP EXTENSION "plpgsql";
                  false            �           0    0    EXTENSION "plpgsql"    COMMENT     B   COMMENT ON EXTENSION "plpgsql" IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16601318    user    TABLE     �   CREATE TABLE "public"."user" (
    "id" integer NOT NULL,
    "name" character varying(40) NOT NULL,
    "email" character varying(40) NOT NULL,
    "pass" character varying(255) NOT NULL,
    "notes" "text" NOT NULL
);
    DROP TABLE "public"."user";
       public         wxpfcgdwrtkeuu    false    7            �           0    0    TABLE "user"    COMMENT     9   COMMENT ON TABLE "public"."user" IS 'I hope this works';
            public       wxpfcgdwrtkeuu    false    196            �          0    16601318    user 
   TABLE DATA               J   COPY "public"."user" ("id", "name", "email", "pass", "notes") FROM stdin;
    public       wxpfcgdwrtkeuu    false    196            f           2606    16601325    user user_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY "public"."user"
    ADD CONSTRAINT "user_pkey" PRIMARY KEY ("id");
 >   ALTER TABLE ONLY "public"."user" DROP CONSTRAINT "user_pkey";
       public         wxpfcgdwrtkeuu    false    196            �      x������ � �     