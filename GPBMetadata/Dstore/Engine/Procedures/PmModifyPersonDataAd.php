<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonData_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class PmModifyPersonDataAd
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
            "0aea0c0a356473746f72652f656e67696e652f70726f636564757265732f" .
            "706d5f4d6f64696679506572736f6e446174615f41642e70726f746f1224" .
            "6473746f72652e656e67696e652e706d5f4d6f64696679506572736f6e44" .
            "6174615f41641a136473746f72652f76616c7565732e70726f746f1a1a64" .
            "73746f72652f656e67696e652f656e67696e652e70726f746f2288080a0a" .
            "506172616d6574657273122e0a09706572736f6e5f696418012001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c75651217" .
            "0a0e706572736f6e5f69645f6e756c6c18e90720012808123a0a16636861" .
            "72616374657269737469635f69645f6c69737418022001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512240a1b636861" .
            "72616374657269737469635f69645f6c6973745f6e756c6c18ea07200128" .
            "08122e0a0a76616c75655f6c69737418032001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512180a0f76616c75655f6c" .
            "6973745f6e756c6c18eb072001280812310a0d6572726f725f69645f6c69" .
            "737418042001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c7565121b0a126572726f725f69645f6c6973745f6e756c6c18ec" .
            "0720012808123e0a19706572736f6e5f6368617261635f63617465676f72" .
            "795f696418052001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c756512270a1e706572736f6e5f6368617261635f636174" .
            "65676f72795f69645f6e756c6c18ed0720012808123e0a1964656c657465" .
            "5f6368617261635f63617465676f72795f696418062001280b321b2e6473" .
            "746f72652e76616c7565732e426f6f6c65616e56616c756512270a1e6465" .
            "6c6574655f6368617261635f63617465676f72795f69645f6e756c6c18ee" .
            "0720012808123c0a17726573756c745f696e5f6572726f725f69645f6c69" .
            "737418072001280b321b2e6473746f72652e76616c7565732e426f6f6c65" .
            "616e56616c756512250a1c726573756c745f696e5f6572726f725f69645f" .
            "6c6973745f6e756c6c18ef072001280812450a2076616c75655f6964735f" .
            "666f725f707265646566696e65645f6368617261637318082001280b321b" .
            "2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565122e0a" .
            "2576616c75655f6964735f666f725f707265646566696e65645f63686172" .
            "6163735f6e756c6c18f00720012808123a0a156368616e67655f616c6c5f" .
            "6f725f6e6f7468696e6718092001280b321b2e6473746f72652e76616c75" .
            "65732e426f6f6c65616e56616c756512230a1a6368616e67655f616c6c5f" .
            "6f725f6e6f7468696e675f6e756c6c18f10720012808122b0a07636f756e" .
            "747279180a2001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c756512150a0c636f756e7472795f6e756c6c18f20720012808" .
            "123b0a17736570617261746f725f696e5f76616c75655f6c697374180b20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512250a1c736570617261746f725f696e5f76616c75655f6c6973745f6e" .
            "756c6c18f3072001280822ed020a08526573706f6e736512380a106d6574" .
            "615f696e666f726d6174696f6e18022003280b321e2e6473746f72652e65" .
            "6e67696e652e4d657461496e666f726d6174696f6e12270a076d65737361" .
            "676518032003280b32162e6473746f72652e656e67696e652e4d65737361" .
            "6765123f0a03726f7718042003280b32322e6473746f72652e656e67696e" .
            "652e706d5f4d6f64696679506572736f6e446174615f41642e526573706f" .
            "6e73652e526f7712310a0d6572726f725f69645f6c69737418652001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651a89" .
            "010a03526f77120f0a06726f775f696418904e20012805123e0a18706572" .
            "736f6e5f63686172616374657269737469635f696418914e2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c756512310a" .
            "0b726573756c745f636f646518924e2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c756542570a1b696f2e6473746f72" .
            "652e656e67696e652e70726f636564757265735a38676f73646b2e647374" .
            "6f72652e64652f656e67696e652f70726f636564757265732f706d5f4d6f" .
            "64696679506572736f6e446174615f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

