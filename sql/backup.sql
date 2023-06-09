PGDMP                         {            hamste    14.5    14.5 7    0           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            1           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            2           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            3           1262    42760    hamste    DATABASE     f   CREATE DATABASE hamste WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE hamste;
                postgres    false            �            1259    43249 	   categoria    TABLE     _   CREATE TABLE public.categoria (
    id bigint NOT NULL,
    nome character varying NOT NULL
);
    DROP TABLE public.categoria;
       public         heap    postgres    false            �            1259    43248    categoria_id_seq    SEQUENCE     y   CREATE SEQUENCE public.categoria_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.categoria_id_seq;
       public          postgres    false    216            4           0    0    categoria_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;
          public          postgres    false    215            �            1259    43242    estoque    TABLE     X   CREATE TABLE public.estoque (
    id bigint NOT NULL,
    quantidade bigint NOT NULL
);
    DROP TABLE public.estoque;
       public         heap    postgres    false            �            1259    43241    estoque_id_seq    SEQUENCE     w   CREATE SEQUENCE public.estoque_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.estoque_id_seq;
       public          postgres    false    214            5           0    0    estoque_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.estoque_id_seq OWNED BY public.estoque.id;
          public          postgres    false    213            �            1259    43229    ordem_compra    TABLE     �   CREATE TABLE public.ordem_compra (
    id bigint NOT NULL,
    data_compra timestamp without time zone DEFAULT CURRENT_DATE,
    usuario_id bigint NOT NULL
);
     DROP TABLE public.ordem_compra;
       public         heap    postgres    false            �            1259    43228    ordem_compra_id_seq    SEQUENCE     |   CREATE SEQUENCE public.ordem_compra_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.ordem_compra_id_seq;
       public          postgres    false    212            6           0    0    ordem_compra_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.ordem_compra_id_seq OWNED BY public.ordem_compra.id;
          public          postgres    false    211            �            1259    43290    ordem_compra_produto    TABLE     �   CREATE TABLE public.ordem_compra_produto (
    quantidade bigint DEFAULT 0 NOT NULL,
    ordem_compra_id bigint NOT NULL,
    produto_id bigint NOT NULL
);
 (   DROP TABLE public.ordem_compra_produto;
       public         heap    postgres    false            �            1259    43267    produto    TABLE       CREATE TABLE public.produto (
    id bigint NOT NULL,
    preco character varying NOT NULL,
    nome character varying NOT NULL,
    image_link character varying,
    roedor_id bigint NOT NULL,
    estoque_id bigint NOT NULL,
    categoria_id bigint NOT NULL
);
    DROP TABLE public.produto;
       public         heap    postgres    false            �            1259    43266    produto_id_seq    SEQUENCE     w   CREATE SEQUENCE public.produto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.produto_id_seq;
       public          postgres    false    220            7           0    0    produto_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.produto_id_seq OWNED BY public.produto.id;
          public          postgres    false    219            �            1259    43258    roedor    TABLE     _   CREATE TABLE public.roedor (
    id bigint NOT NULL,
    especie character varying NOT NULL
);
    DROP TABLE public.roedor;
       public         heap    postgres    false            �            1259    43257    roedor_id_seq    SEQUENCE     v   CREATE SEQUENCE public.roedor_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.roedor_id_seq;
       public          postgres    false    218            8           0    0    roedor_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.roedor_id_seq OWNED BY public.roedor.id;
          public          postgres    false    217            �            1259    43217    usuario    TABLE     �   CREATE TABLE public.usuario (
    id bigint NOT NULL,
    flg_admin boolean DEFAULT false NOT NULL,
    nome character varying NOT NULL,
    telefone character varying,
    senha character varying NOT NULL,
    email character varying NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            �            1259    43216    usuario_id_seq    SEQUENCE     w   CREATE SEQUENCE public.usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.usuario_id_seq;
       public          postgres    false    210            9           0    0    usuario_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;
          public          postgres    false    209            ~           2604    43252    categoria id    DEFAULT     l   ALTER TABLE ONLY public.categoria ALTER COLUMN id SET DEFAULT nextval('public.categoria_id_seq'::regclass);
 ;   ALTER TABLE public.categoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            }           2604    43245 
   estoque id    DEFAULT     h   ALTER TABLE ONLY public.estoque ALTER COLUMN id SET DEFAULT nextval('public.estoque_id_seq'::regclass);
 9   ALTER TABLE public.estoque ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    214    214            {           2604    43232    ordem_compra id    DEFAULT     r   ALTER TABLE ONLY public.ordem_compra ALTER COLUMN id SET DEFAULT nextval('public.ordem_compra_id_seq'::regclass);
 >   ALTER TABLE public.ordem_compra ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    212    212            �           2604    43270 
   produto id    DEFAULT     h   ALTER TABLE ONLY public.produto ALTER COLUMN id SET DEFAULT nextval('public.produto_id_seq'::regclass);
 9   ALTER TABLE public.produto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220                       2604    43261 	   roedor id    DEFAULT     f   ALTER TABLE ONLY public.roedor ALTER COLUMN id SET DEFAULT nextval('public.roedor_id_seq'::regclass);
 8   ALTER TABLE public.roedor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            y           2604    43220 
   usuario id    DEFAULT     h   ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);
 9   ALTER TABLE public.usuario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            (          0    43249 	   categoria 
   TABLE DATA           -   COPY public.categoria (id, nome) FROM stdin;
    public          postgres    false    216   j;       &          0    43242    estoque 
   TABLE DATA           1   COPY public.estoque (id, quantidade) FROM stdin;
    public          postgres    false    214   �;       $          0    43229    ordem_compra 
   TABLE DATA           C   COPY public.ordem_compra (id, data_compra, usuario_id) FROM stdin;
    public          postgres    false    212   �;       -          0    43290    ordem_compra_produto 
   TABLE DATA           W   COPY public.ordem_compra_produto (quantidade, ordem_compra_id, produto_id) FROM stdin;
    public          postgres    false    221   <       ,          0    43267    produto 
   TABLE DATA           c   COPY public.produto (id, preco, nome, image_link, roedor_id, estoque_id, categoria_id) FROM stdin;
    public          postgres    false    220   /<       *          0    43258    roedor 
   TABLE DATA           -   COPY public.roedor (id, especie) FROM stdin;
    public          postgres    false    218   �<       "          0    43217    usuario 
   TABLE DATA           N   COPY public.usuario (id, flg_admin, nome, telefone, senha, email) FROM stdin;
    public          postgres    false    210   /=       :           0    0    categoria_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.categoria_id_seq', 5, true);
          public          postgres    false    215            ;           0    0    estoque_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.estoque_id_seq', 7, true);
          public          postgres    false    213            <           0    0    ordem_compra_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.ordem_compra_id_seq', 1, false);
          public          postgres    false    211            =           0    0    produto_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.produto_id_seq', 3, true);
          public          postgres    false    219            >           0    0    roedor_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.roedor_id_seq', 9, true);
          public          postgres    false    217            ?           0    0    usuario_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.usuario_id_seq', 2, true);
          public          postgres    false    209            �           2606    43256    categoria categoria_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.categoria DROP CONSTRAINT categoria_pkey;
       public            postgres    false    216            �           2606    43247    estoque estoque_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.estoque
    ADD CONSTRAINT estoque_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.estoque DROP CONSTRAINT estoque_pkey;
       public            postgres    false    214            �           2606    43235    ordem_compra ordem_compra_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.ordem_compra
    ADD CONSTRAINT ordem_compra_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.ordem_compra DROP CONSTRAINT ordem_compra_pkey;
       public            postgres    false    212            �           2606    43274    produto produto_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.produto DROP CONSTRAINT produto_pkey;
       public            postgres    false    220            �           2606    43265    roedor roedor_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.roedor
    ADD CONSTRAINT roedor_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.roedor DROP CONSTRAINT roedor_pkey;
       public            postgres    false    218            �           2606    43227    usuario usuario_email_key 
   CONSTRAINT     U   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);
 C   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_email_key;
       public            postgres    false    210            �           2606    43225    usuario usuario_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    210            �           2606    43285    produto fk_categoria    FK CONSTRAINT     |   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES public.categoria(id);
 >   ALTER TABLE ONLY public.produto DROP CONSTRAINT fk_categoria;
       public          postgres    false    3211    216    220            �           2606    43280    produto fk_estoque    FK CONSTRAINT     v   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT fk_estoque FOREIGN KEY (estoque_id) REFERENCES public.estoque(id);
 <   ALTER TABLE ONLY public.produto DROP CONSTRAINT fk_estoque;
       public          postgres    false    220    214    3209            �           2606    43294 $   ordem_compra_produto fk_ordem_compra    FK CONSTRAINT     �   ALTER TABLE ONLY public.ordem_compra_produto
    ADD CONSTRAINT fk_ordem_compra FOREIGN KEY (ordem_compra_id) REFERENCES public.ordem_compra(id);
 N   ALTER TABLE ONLY public.ordem_compra_produto DROP CONSTRAINT fk_ordem_compra;
       public          postgres    false    212    221    3207            �           2606    43299    ordem_compra_produto fk_produto    FK CONSTRAINT     �   ALTER TABLE ONLY public.ordem_compra_produto
    ADD CONSTRAINT fk_produto FOREIGN KEY (produto_id) REFERENCES public.produto(id);
 I   ALTER TABLE ONLY public.ordem_compra_produto DROP CONSTRAINT fk_produto;
       public          postgres    false    220    221    3215            �           2606    43275    produto fk_roedor    FK CONSTRAINT     s   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT fk_roedor FOREIGN KEY (roedor_id) REFERENCES public.roedor(id);
 ;   ALTER TABLE ONLY public.produto DROP CONSTRAINT fk_roedor;
       public          postgres    false    220    3213    218            �           2606    43236    ordem_compra fk_usuario    FK CONSTRAINT     {   ALTER TABLE ONLY public.ordem_compra
    ADD CONSTRAINT fk_usuario FOREIGN KEY (usuario_id) REFERENCES public.usuario(id);
 A   ALTER TABLE ONLY public.ordem_compra DROP CONSTRAINT fk_usuario;
       public          postgres    false    212    210    3205            (   C   x�3�J<����|.#N�������\.cN�����Û�2�L8=2�3S�R�L9�2ss�b���� x�Y      &   (   x�3�4�2�4�2�44�2�44�2��qq��Db���� T��      $      x������ � �      -      x������ � �      ,   �   x�=�A
�0@���9AH�&�eх��.�2�!ThZ'��Q��}Fk8�9�N������A=��Ւ���	N�y?3�Hr�H#�Olu3�y���yO;,uf�X�j=4���J̘h��\0�<v����a(��#-l���B��W.�      *   P   x�3�t�O����2�t���K���I�2�J,��2��H�-.I-�2�tN,.�/R)-J��KL��2�t-.,�������� ��      "   o   x�%�1�0k�1�d�V���Ȏ�P�?���j��M~��'i3�tf��`���kފt+��xϼ��/���|�	���J�����1��c*P�D������o�_�ۖR� �"�     