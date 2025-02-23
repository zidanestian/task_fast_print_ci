PGDMP     5    &                 }            db_task_fast_print_ci    13.18    13.18     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16821    db_task_fast_print_ci    DATABASE     y   CREATE DATABASE db_task_fast_print_ci WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
 %   DROP DATABASE db_task_fast_print_ci;
                postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
                postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                   postgres    false    3            �            1259    16854    kategori    TABLE     v   CREATE TABLE public.kategori (
    id_kategori integer NOT NULL,
    nama_kategori character varying(100) NOT NULL
);
    DROP TABLE public.kategori;
       public         heap    postgres    false    3            �            1259    16852    kategori_id_kategori_seq    SEQUENCE     �   CREATE SEQUENCE public.kategori_id_kategori_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.kategori_id_kategori_seq;
       public          postgres    false    202    3            �           0    0    kategori_id_kategori_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.kategori_id_kategori_seq OWNED BY public.kategori.id_kategori;
          public          postgres    false    201            �            1259    16849 
   migrations    TABLE     @   CREATE TABLE public.migrations (
    version bigint NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false    3            �            1259    16870    produk    TABLE     �   CREATE TABLE public.produk (
    id_produk integer NOT NULL,
    nama_produk character varying(250) NOT NULL,
    harga numeric(10,2) NOT NULL,
    kategori_id integer NOT NULL,
    status_id integer NOT NULL
);
    DROP TABLE public.produk;
       public         heap    postgres    false    3            �            1259    16868    produk_id_produk_seq    SEQUENCE     �   CREATE SEQUENCE public.produk_id_produk_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.produk_id_produk_seq;
       public          postgres    false    206    3            �           0    0    produk_id_produk_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.produk_id_produk_seq OWNED BY public.produk.id_produk;
          public          postgres    false    205            �            1259    16862    status    TABLE     p   CREATE TABLE public.status (
    id_status integer NOT NULL,
    nama_status character varying(100) NOT NULL
);
    DROP TABLE public.status;
       public         heap    postgres    false    3            �            1259    16860    status_id_status_seq    SEQUENCE     �   CREATE SEQUENCE public.status_id_status_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.status_id_status_seq;
       public          postgres    false    204    3            �           0    0    status_id_status_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.status_id_status_seq OWNED BY public.status.id_status;
          public          postgres    false    203            2           2604    16857    kategori id_kategori    DEFAULT     |   ALTER TABLE ONLY public.kategori ALTER COLUMN id_kategori SET DEFAULT nextval('public.kategori_id_kategori_seq'::regclass);
 C   ALTER TABLE public.kategori ALTER COLUMN id_kategori DROP DEFAULT;
       public          postgres    false    201    202    202            4           2604    16873    produk id_produk    DEFAULT     t   ALTER TABLE ONLY public.produk ALTER COLUMN id_produk SET DEFAULT nextval('public.produk_id_produk_seq'::regclass);
 ?   ALTER TABLE public.produk ALTER COLUMN id_produk DROP DEFAULT;
       public          postgres    false    206    205    206            3           2604    16865    status id_status    DEFAULT     t   ALTER TABLE ONLY public.status ALTER COLUMN id_status SET DEFAULT nextval('public.status_id_status_seq'::regclass);
 ?   ALTER TABLE public.status ALTER COLUMN id_status DROP DEFAULT;
       public          postgres    false    204    203    204            �          0    16854    kategori 
   TABLE DATA                 public          postgres    false    202   }       �          0    16849 
   migrations 
   TABLE DATA                 public          postgres    false    200   +       �          0    16870    produk 
   TABLE DATA                 public          postgres    false    206   o       �          0    16862    status 
   TABLE DATA                 public          postgres    false    204           �           0    0    kategori_id_kategori_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.kategori_id_kategori_seq', 8, true);
          public          postgres    false    201            �           0    0    produk_id_produk_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.produk_id_produk_seq', 1, true);
          public          postgres    false    205            �           0    0    status_id_status_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.status_id_status_seq', 3, true);
          public          postgres    false    203            6           2606    16859    kategori pk_kategori 
   CONSTRAINT     [   ALTER TABLE ONLY public.kategori
    ADD CONSTRAINT pk_kategori PRIMARY KEY (id_kategori);
 >   ALTER TABLE ONLY public.kategori DROP CONSTRAINT pk_kategori;
       public            postgres    false    202            :           2606    16875    produk pk_produk 
   CONSTRAINT     U   ALTER TABLE ONLY public.produk
    ADD CONSTRAINT pk_produk PRIMARY KEY (id_produk);
 :   ALTER TABLE ONLY public.produk DROP CONSTRAINT pk_produk;
       public            postgres    false    206            8           2606    16867    status pk_status 
   CONSTRAINT     U   ALTER TABLE ONLY public.status
    ADD CONSTRAINT pk_status PRIMARY KEY (id_status);
 :   ALTER TABLE ONLY public.status DROP CONSTRAINT pk_status;
       public            postgres    false    204            �   �   x���v
Q���W((M��L��N,IM�/�Ts�	uV�0�QP�Quu��T״��$B�X�o����w�k��'P��W�X��p�!�N�~�
>�Dk6j �pr��0��	���Q���ӏ$��a�?	.0y�W� W��\\ �fzP      �   4   x���v
Q���W((M��L���L/J,���+Vs�	uV�0Դ��� A�%      �   �  x���Qo�0���+�[S�m���'��`a0��{�&M�V�����K�Jk�֤RD��|��{A՝l-��xx������ǿ?�~�g�{��*��s�3S�����2-�p/��U�k�_B@!ׄ�~.>��w�ӝz_���+�1J��� SK��ZX���=�j0 �>����|���i�Rblrx�o�~lnQl�n$�R޳�����I����	��pLP��s���t�ڶB�z+K���w9�r��(��Mc��RfJ��
��"W�XQB�[U��"�űd\vӹ��sG�;���da������^�3�����@�Rh�Y�����Y	Z�G���n�+���qF�z�1�;hZ�E3Q�TC9'���#o��U�Ax;�1�X+�iY|K�U6��E�����K�M��m��n�G��V��(��u���=&�{v'���m�GJF:��$~]��$���4VU�+f��V�|���8�{D2!��-Ί���Z�����|4�EDX��K���\}=�ɞ��Y�\�V,�hJ=�ca�l�b�<^�Q����'�O�g6��cZQ�G6v�G�!���	OO�B���r��/|����3��帓Z�/Q�	%:�%|z��_��~Oʗ�ž�k�2�_�|uv���\      �   M   x���v
Q���W((M��L�+.I,)-Vs�	uV�0�QPO�,NTH��*M�Q״��$����$3%1[M+ �t"�     