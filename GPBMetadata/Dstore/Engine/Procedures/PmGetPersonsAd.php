<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersons_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class PmGetPersonsAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad00c0a2f6473746f72652f656e67696e652f70726f636564757265732f" .
            "706d5f476574506572736f6e735f41642e70726f746f121e6473746f7265" .
            "2e656e67696e652e706d5f476574506572736f6e735f41641a136473746f" .
            "72652f76616c7565732e70726f746f1a1a6473746f72652f656e67696e65" .
            "2f656e67696e652e70726f746f22c5070a0a506172616d65746572731230" .
            "0a0b736f72745f6f726465723118012001280b321b2e6473746f72652e76" .
            "616c7565732e426f6f6c65616e56616c756512190a10736f72745f6f7264" .
            "6572315f6e756c6c18e9072001280812300a0b736f72745f6f7264657232" .
            "18022001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e" .
            "56616c756512190a10736f72745f6f72646572325f6e756c6c18ea072001" .
            "280812300a0b736f72745f6f726465723318032001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c756512190a10736f7274" .
            "5f6f72646572335f6e756c6c18eb0720012808123d0a196f75747075745f" .
            "63686172616374657269737469635f69647318042001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512270a1e6f757470" .
            "75745f63686172616374657269737469635f6964735f6e756c6c18ec0720" .
            "012808122a0a05636f756e7418052001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512130a0a636f756e745f6e756c" .
            "6c18ed072001280812330a0e6c6173745f706572736f6e5f696418062001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "65121c0a136c6173745f706572736f6e5f69645f6e756c6c18ee07200128" .
            "08122f0a0b6c6173745f76616c75657318072001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c756512190a106c6173745f76" .
            "616c7565735f6e756c6c18ef072001280812330a0e706572736f6e5f7479" .
            "70655f696418082001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565121c0a13706572736f6e5f747970655f69645f6e" .
            "756c6c18f0072001280812290a046e65787418092001280b321b2e647374" .
            "6f72652e76616c7565732e426f6f6c65616e56616c756512120a096e6578" .
            "745f6e756c6c18f10720012808122d0a0867726f75705f6964180a200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12160a0d67726f75705f69645f6e756c6c18f20720012808122f0a0a726f" .
            "775f6e756d626572180b2001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c756512180a0f726f775f6e756d6265725f6e75" .
            "6c6c18f30720012808123c0a18736570617261746f725f696e5f6c617374" .
            "5f76616c756573180c2001280b321a2e6473746f72652e76616c7565732e" .
            "537472696e6756616c756512260a1d736570617261746f725f696e5f6c61" .
            "73745f76616c7565735f6e756c6c18f4072001280822a8030a0852657370" .
            "6f6e736512380a106d6574615f696e666f726d6174696f6e18022003280b" .
            "321e2e6473746f72652e656e67696e652e4d657461496e666f726d617469" .
            "6f6e12270a076d65737361676518032003280b32162e6473746f72652e65" .
            "6e67696e652e4d65737361676512390a03726f7718042003280b322c2e64" .
            "73746f72652e656e67696e652e706d5f476574506572736f6e735f41642e" .
            "526573706f6e73652e526f77122a0a05636f756e7418652001280b321b2e" .
            "6473746f72652e76616c7565732e496e746567657256616c75651ad1010a" .
            "03526f77120f0a06726f775f696418904e20012805122f0a09706572736f" .
            "6e5f696418914e2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565122c0a0676616c75653118a29c012001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565122c0a06" .
            "76616c75653218b3ea012001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c7565122c0a0676616c75653318c2b8022001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75654251" .
            "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
            "32676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
            "757265732f706d5f476574506572736f6e735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

